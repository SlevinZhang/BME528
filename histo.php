<?php 
$hostname_dose = "localhost";
$database_dose = "doseimg";
$username_dose = "icare";
$password_dose = "\$icare_Lab"; 
$con= mysql_pconnect($hostname_dose, $username_dose, $password_dose);
mysql_select_db($database_dose, $con); ?>
<?php require_once('function/GetSQLValueString.php');?>
<?php require_once('function/auth.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iCare</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/body.css" rel="stylesheet" type="text/css" />
</head> 

<script src="/js/jquery-1.10.1.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>

<script   type="text/javascript">
var a= new Array();
var mm=0;
a['his']=new Array();
var aa=[0,0,0,0,0,0,0,0,0,0,0,0,0,0];
a['his']=[0,
1,
1,
1,
2,
12,
0,
1,
7,
2,
7,
1,
0,
2,
0,
0,
2,
0,
1,
1,
0,
3,
0,
1,
1,
0,
1,
1,
0,
0,
1,
1,
1,
1,
1,
1,
1,
1,
9,
0,
2,
0,
2,
0,
4,
2,
0,
0,
1,
0,
1,
0,
1,
2,
2,
6,
0,
0,
1,
2,
0,
0,
0,
2,
0,
0,
4,
2,
1,
0,
1,
2,
0,
0,
0,
8,
1,
4,
0,
1,
1,
1,
0,
1,
0,
1,
0,
0,
1,
0,
0,
1,
1,
3,
9,
4,
0,
0,
1,
5,
7,
0,
0,
6,
0,
0,
3,
1,
11,
1,
1
];
var i=0;
while(i<a['his'].length)
{ aa[a['his'][i]]++;
  i=i+1;
 }

/* <?php

$Restrict="SELECT studies.diff 
FROM studies
INNER JOIN series
ON studies.id=series.study_id AND series.status='active' AND series.dcm_Modality='CT';";
$result = mysql_query($Restrict,$con) or die(mysql_error());
$totalRows_Recordset = mysql_num_rows($result );


$row=array();
$Diff=array();
$His=array();
$i=0;
$m=0;
while($row = mysql_fetch_array($result))
{//echo $row['diff'];
$Diff[$i]= strval( $row['diff']);
$His[$Diff[$i]]++;
$i=$i+1;
}

//print_r($His);

  while($m<$i)
   {echo "a['his'][".$m."] = '" . $His[$m] . "';";
   $m=$m+1;
   
}

?>  */
/* while(mm<<?php echo $m;?>)
{ if(a['his'][mm]=="")
  { aa[mm]=0;}
  else
  {aa[mm]=parseInt(a['his'][mm]);}
  mm=mm+1
  } */
  var m_a=0;
  var tabstr = "<table class=\"table\" id=1><tr><th>Different_Days</th><th>Number</th></tr>";
  while(m_a<aa.length)
  {
 if(aa[m_a]!=0)
  { tabstr=tabstr+"<tr><td>"+m_a+"</td><td>"+aa[m_a]+"</td></tr>";
    } m_a=m_a+1;
  }
	tabstr=tabstr+"</table>";
  $("#addtab").append(tabstr);
/* $(document).ready(function(){
  
 var s1 = [200, 600, 700, 1000];
    var s2 = [460, -210, 690, 820];
    var s3 = [-260, -440, 320, 200];
    // Can specify a custom tick Array.
    // Ticks should match up one for each y value (category) in the series.
    var ticks = ['May', 'June', 'July', 'August'];
     
    var plot1 = $.jqplot('chart1', [s1, s2, s3], {
        // The "seriesDefaults" option is an options object that will
        // be applied to all series in the chart.
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
            rendererOptions: {fillToZero: true}
        },
        // Custom labels for the series are specified with the "label"
        // option on the series option.  Here a series option object
        // is specified for each series.
        series:[
            {label:'Hotel'},
            {label:'Event Regristration'},
            {label:'Airfare'}
        ],
        // Show the legend and put it outside the grid, but inside the
        // plot container, shrinking the grid to accomodate the legend.
        // A value of "outside" would not shrink the grid and allow
        // the legend to overflow the container.
        legend: {
            show: true,
            placement: 'outsideGrid'
        },
        axes: {
            // Use a category axis on the x axis and use our custom ticks.
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
                ticks: ticks
            },
            // Pad the y axis just a little so bars can get close to, but
            // not touch, the grid boundaries.  1.2 is the default padding.
            yaxis: {
                pad: 1.05,
                tickOptions: {formatString: '$%d'}
            }
        }
    });
}); */

</script>
<body>
<div id="addtab"></div>
<div id="chart1" ></div>
</body>

</html>