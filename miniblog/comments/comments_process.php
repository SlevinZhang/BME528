<?php
ob_start();
session_start(); // needed by the captcha

/************************************************************************************
Page Comments - Written by Andy Bowers | http://www.halfadot.com | andy@halfadot.com
Version 6.0 - release date 2008-03-08 [Original Version 1 release 2003-11-28]

Version 6 contains a spam catch routine found at 
http://www.imarc.net/blog/61/stopping_blog_comment_spam_with_php/

You are free to use this script as long as the credits and notes are not removed.  If
you intend to distribute this script, make sure to include all of the files from the
original zip package.  Your use of this script is subject to the terms of the license
included in the zipped package as license.txt, and constitutes acceptance thereto.

Please e-mail me with any questions or comments I may even respond :)
************************************************************************************/

// no need to edit below here

// first, connect to database and select table
include("includes/db_conn.php"); // the usual host/username/password/database amd table name
mysql_connect($db_host, $db_user, $db_pass) or die ("Can't connect!");  
mysql_select_db($db_name) or die ("Can't open database!"); 	

// include useful configuration and user input clean function
include("includes/comments-config.php");
include("includes/clean_input.php");

// function to check for all our favorite penis extenders and othes spam trash
function flag_spam($text) {
    $total_matches = 0;
    $trash = array();
    
    // Count the regular links
    $regex = "/<\s*a\s+href\s*=\s*/i";
    $total_matches += preg_match_all($regex, $text, $trash);
    
    // Count the PHPBB links
	$regex = "/\[url/i";
    $total_matches += 5 * preg_match_all($regex, $text, $trash);
    
    // Check for common spam words
	include("includes/spam_list.php"); // editable list
    foreach ($words as $word) {
        $word_matches = preg_match_all('/' . $word . '/i', $text, $trash);
        $total_matches += 5 * $word_matches;
    }
    if ($total_matches > 4) {
        return TRUE;
    }
    return FALSE;
}

// let's check to see if they matched our CAPTCHA
if ($captchas == 1) {
	$secure_match = strtoupper(trim($_POST['secure_match']));
	if ($secure_match != $_SESSION['captcha']) {
		include("responses/post-bad-captcha.php");
		exit();
	}
}

// abstract data sent from form
foreach ($_POST as $k=>$v) {
	${$k} = clean($v);
}

/*
Now make various checks on posted comments. If these tests 'fail' the user will 
be shown a 'response' page with a sensitive message advising them of the problem
*/

// reject posts containg tags of any sort
if ($reject_tags == 1) {
   	$base_comments = $comments;
   	$comments = strip_tags($comments);
   	if (strlen($comments)!=strlen($base_comments)) {
		include("responses/post-no_tags.php");
		exit();
	}   	
}
// reject posts containg links of any sort
if ($reject_links == 1) {
	if (preg_match('~(?:[a-z0-9+.-]+://)?(?:\w+\.)+\w{2,6}\S*~i', $comments)) {
		include("responses/post-no_links.php");
	exit();
	}   	
}
// is comment a useful length?
if (strlen($comments) < $useful) {
	include("responses/post-blank.php");
	exit;
} else {
	//let's check for moronically long words
	$words = explode(" ",$comments);
	for ($i=0;$i<count($words);$i++) {
		if (strlen($words[$i])>30) {
			// overlong word detected
			include("responses/post-overlong.php");
			exit();
		}
	}
	//let's check for spam trash
	if (flag_spam($comments)) {
		include("responses/post-spam.php");
		exit();
	}
	// so far, so good. let's deal with the remaining stuff	

	$name = trim(strip_tags($name));
	$location = trim(strip_tags($locn));
	$flag = $country;
	if ($location=="" && $flag!="blank") {
		// knowing the flag we 'know' the country, so ...
		if (strlen($flag)<4) {
			$location = strtoupper($flag); // uk, usa, uae
		} else {
			$location = ucwords(str_replace("_"," ",$flag)); // other countries
		}
	}
	$rating = $art_rating; // optional in form
	$comments = strip_tags(trim($comments));
	$ip = $_SERVER['REMOTE_ADDR'];
	$dated = date("Y-m-d H:i:s"); // server date/time
		
	// flood control checked by delay between consecutive posts from same IP
	if ($flood_control==1) {
		$where = "ip = '$ip'";
		if ($flood_page==1) {
			$where.= " AND page_id = '$page_id'";
		}  
		$query = "SELECT dated from $db_table WHERE ". $where. " ORDER by dated DESC LIMIT 1"; // most recent only
		$result = mysql_query($query);
		if (mysql_num_rows($result)>0) {
			$myrow = mysql_fetch_array($result);
			$tim = strtotime($myrow['dated']);
			$diff = time() - $tim;
			if ($diff < $flood_delay) {
				include("responses/post-flood.php");
				exit();
			}
		}
	}

	// flood control for maximum posts in a period by same IP
   	if ($posts_flood==1) {
		$now = strtotime($dated); // current time in seconds
		$early = $now - 3600 * $posts_period;
		$earlier = date("Y-m-d H:is", $early);	  
		$query = "SELECT count(*) as posts from $db_table WHERE ip='$ip' AND dated>'$earlier'";
		$result = mysql_query($query) or die("Error with query ". $query);
		$myrow = $myrow = mysql_fetch_array($result);
		$posts = $myrow['posts'];
		if ($posts>=$posts_max){
			include("responses/post-flood.php");
		 exit();
		}
	}	
	
	// check for a few 'bad' words here
	$original = $comments;
	$text = $comments;
	include("includes/phpMyPhilter.php");
	$any = filter($text,1);
	$comments = $text;

// OK, this post has passed the tests
	if ($mail_on) {
		// notify self
		$mail_to = $eaddr. "@". $domain; // send mail here
		$mail_subject = "Visitor Comments from ". $domain;
		$mail_from = "From: comments_robot@". $domain; // imaginary mail sender
		$mail_body = "A visitor submitted a comment to your site on the page you identified as ". $page_id;
		$mail_body.= " located at ". $ret_url. ". The comment was made at ". $dated. " from IP ". $ip. ".\n\n";
		$mail_body.= "This visitor gave the name '". $name. "' and the location '". $location. "' in their post. ";
		$mail_body.= "The comment was as follows:\n\n";
		$mail_body.= stripslashes($original);
	
		if($any==1 && $swearban==0) { 
			$mail_body.= "\n\nA moderated version has been posted and added to the database.";
		}
		if ($any==1 && $swearban==1) { 
			$mail_body.= "\n\nThe comments were neither posted nor added to the database.";
		}
		if ($is_approved==0) {
			$mail_body.= "\n. This comment is awaiting approval.";
		}
		$base = explode("comments", $ret_url);
		$editloc = $base[0]. "comments/comments/editor/loginform.php";
		$mail_body.= "\n\nYou can edit this (or any other posting) by visiting ". $editloc;
		$mail_body.= "\n\n+++++++++++++++++++++++++++++\nThis is an automated response, do not reply\n+++++++++++++++++++++++++++++";
		// and send the comments off to the webmaster
		mail("$mail_to","$mail_subject","$mail_body","$mail_from");
	}
	// continuation of form processing  
	
	// check to see if we post it
	if ($any==0) {
		// OK to post - any is an OUTPUT from the swear-checking routine.
		// create and execute the query to insert data
		$query = "INSERT INTO $db_table (id, name, location, flag, comments, ip, dated, page_id, rating, is_approved) VALUES ('', '$name' , '$location' , '$flag', '$comments', '$ip', '$dated', '$page_id', '$rating', '$is_approved') ";
		$result = mysql_query($query) or die("Error: ". mysql_error(). " with query ". $query);
		include("responses/post-ok.php");
		exit();

		$off_to = "Location:". $ret_url; // back to the page we posted on
		header($off_to);
		ob_end_flush();
		exit;	
	} else {
		// comment contains 'swear' words
		if ($swearban==0) {
			// post moderated comments
			// create and execute the query to insert data
			$query = "INSERT INTO $db_table (id, name, location, flag, comments, ip, dated, page_id, rating, is_approved) VALUES ('', '$name' , '$location' , '$flag', '$comments', '$ip', '$dated', '$page_id', '$rating', '$is_approved') ";
			$result = mysql_query($query) or die("Error: ". mysql_error(). " with query ". $query);
			include("responses/post-bad.php");
			exit;
		} else {
			include("responses/post-very-bad.php");
			exit;
		}
	}  
}
?>
