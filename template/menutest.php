
<style type="text/css">
.dosetitle {
	color: #FFF;
}
.username {
	color:#FFF;
	text-align:right;
}
</style>
<!--  				<table width="100%" bgcolor=#990000>
  					<tr>
  						<td  bgcolor=#990000 ><a href="http://www.usc.edu"><img src="../img/usc-name-gold-cardinal.gif" width="255" height="25" border="0" alt="University of Southern California" /></a></td> 
  						<TD width="20%" rowspan=2 bgColor=#990000><div align="center"><span class="red">
  						<a href="http://www.usc.edu/schools/medicine/"><img src="../img/keck.jpg" width="105" height="40" border="0"></a></span></div></TD>
						</tr>
  					<TR> 
    					<TD bgcolor=#990000 ><h2 align="center"><span class="dosetitle">Dose Optimization in Stroke Rehabilitation</span> </h2></TD>	
  					</TR>
                    <tr>
                    <td></td>
                    	<td><span class="username">
                </span></td>
                    </tr>
				</table>
                -->
<div class="navbar">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
		<a class="brand" href="http://www.usc.edu"> University of Southern California</a>
		<div class="nav-collapse">
          <ul class="nav">
          	<li class="active"><a href="#"> Dose Optimization</a></li>
            <li class="active"><a href="index.php">Home</a></li>
			<?php 
			if(isset($_SESSION['MM_UserGroup'])&&($_SESSION['MM_UserGroup']=="Admin"||$_SESSION['MM_UserGroup']=="Therapist"||$_SESSION['MM_UserGroup']=="PI") )
			{ 
				echo 
				'    <li class="dropdown">
		              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Screen <b class="caret"></b></a>
			              <ul class="dropdown-menu">
    	    	    	    <li><a href="/new_subject.php">New Subject</a></li>
					    	<li><a href="/screen_worklist.php">Current Subjects</a></li>
							<li class="divider"></li>
		        	      </ul>
    	    		 </li>
				';
			}
			?>

			
				<?php 
				if(isset($_SESSION['MM_UserGroup']))
				$usergroup=$_SESSION['MM_UserGroup'];
				else
				$usergroup = "Guest";
				
				
				if(in_array($usergroup,array("Admin","Therapist","PI","Evaluator"))) 
				{ 
					echo "<li><a href=\"/study_worklist.php\">Study</a></li>";
				}
				?>
			
				<?php 
				if(in_array($usergroup,array("Admin","Data"))) 
				{ 
					echo "<li>
							<a href=\"Report.php\">Report</a>
						  </li>
						";
				}
				?>

				<?php 
				if(in_array($usergroup,array("Admin"))) 
				{ 
					echo "<li>
							<a href=\"Tool.php\">ToolBox</a>
						  </li>
						";
				}
				?>
			
			<li><a href="/logout.php">Log out</a></li>
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
<?php		if(in_array($usergroup,array("Admin","Therapist","PI","Evaluator"))) 
			{ 
?>
            <li>

  	         	<a href="#">
   	         	<?php echo $_SESSION['StudyID']; ?>
                </a>
            </li>
            <?php }?>
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