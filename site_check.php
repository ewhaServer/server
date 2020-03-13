<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
<?php

session_start();

$site = $_GET['site_name'];

  $mysqli = mysqli_connect("localhost","root","ewha0110","ewhaglobal");
  $check = "SELECT * FROM device_tbl a
  					LEFT JOIN site_tbl b
  					ON a.site_link=b.id
  					WHERE site_name='$site'
  				 ";

  $result = mysqli_query($mysqli, $check);
  $rows = mysqli_num_rows($result);

  if(	$row = mysqli_fetch_assoc($result))
  {
    $site_name=$row['site_name'];
  	$_SESSION['site_name']=$site_name;

    if($rows>1){
      echo ("<meta http-equiv='Refresh' content='0; URL=./button2.php'>");
    }
    else{
    	echo ("<meta http-equiv='Refresh' content='0; URL=./button.php'>");
    };
  };
?>
  </body>
</html>
