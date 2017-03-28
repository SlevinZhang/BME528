<script type="text/javascript">
		// <![CDATA[
			function openWindow(url,width,height,options,name) {
				width = width ? width : screen.width/2.5;
				height = height ? height : screen.height/2.5;
				options = options ? options : 'resizable=yes';
				name = name ? name : 'openWindow';
				chat_window=window.open(
					url,
					name,
					'screenX='+(screen.width-width)+',screenY='+(screen.height-height-50)+',width='+width+',height='+height+','+options
				)
			}
			function icare_logout()
			{
			if(false ==chat_window.closed)
			  {
				 chat_window.close ();
			  }
			}
		// ]]>
	</script>
<style type="text/css">
.dosetitle {
	color: #FFF;
}
.username {
	color:#FFF;
	text-align:right;
}
</style>
<div class="navbar">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
		<a class="brand" href="http://www.usc.edu"> University of Southern California</a>
		<div class="nav-collapse">
          <ul class="nav">
            <li class=""><a href="/index.php">Home</a></li>
<?php			if(isset($_SESSION['MM_Username'])){
?>
          	<li class=""><a href="/wado/www/admin">Worklist</a></li>
            <li class=""><a href="/wadoupload.php">Upload Images</a></li>
			<li class=""><a href="/chat/" onclick="openWindow(this.href);this.blur();return false;">Chat</a></li>
			<li><a href="/logout.php" onclick="icare_logout()">Log out</a></li>
<?php
}
?>
			</ul>
          <ul class="nav pull-right">
            <li class="active">
			<a href="#">
            <?php
			if(isset($_SESSION['MM_Username'])){
				echo "Welcome! ".$_SESSION['MM_UserGroup']."::".$_SESSION['MM_Username'];
			};
			?>        
            </a>    
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar --><!--
<ul class="nav nav-tabs">
  <li class="dropdown">
    <a href="#">
       Home
      </a>
    <ul class="dropdown-menu">
		
    </ul>
  </li>
</ul>
<ul id="MenuBar" class="MenuBarHorizontal">
  <li><a href="#">Home</a>  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Screen</a>
    <ul>
      <li><a href="/new_subject.php">New Subject</a></li>
      <li><a href="/screen_worklist.php">Current Subjects</a></li>
    </ul>
  </li>
  <li><a href="/study_subject.php">Study</a>  </li>
  <li><a href="/logout.php">Log out</a></li>
</ul>

-->