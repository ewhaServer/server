<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="expires" content="-1">
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
  </head>
  <body>

<?php
	session_start();

	include "dbconnect.php";

	$phone = $_POST['phone'];
	$pw = $_POST['pw'];
  //$pw = md5($_POST['pw']);

  $mysqli = mysqli_connect("$host","$dbid","$dbpw","$dbname");
/*
	$check = "SELECT * FROM user_tbl
				WHERE phone='$phone'";
  */

        $check = "SELECT * FROM user_tbl
                  WHERE phone='$phone'";

	$result = mysqli_query($mysqli, $check);

	if(	$row = mysqli_fetch_assoc($result))
	{
		$name=$row['name'];
		$_SESSION['name']=$name;

  	if($row['password'] == $pw)
		{
			$_SESSION['phone'] = $phone;

			if(isset($_SESSION['phone']))
			{
    /*    if($phone!='ewha_admin1')
        {*/
	         header("Location:./user.php");

        /*
        else
        {
          header("Location:./admin_table.php");
			  }*/
      }
			else
			{
				echo "ID is not in sestion.";
			}
		}
		else
		{
			echo "<script>alert('패스워드를 확인하세요.');</script>";
      echo("<meta http-equiv='Refresh' content='1; URL=index.php'>");

		}
	}
	else
	{
		echo "<script>alert('전화번호를 확인하세요.');</script>";
    echo("<meta http-equiv='Refresh' content='1; URL=index.php'>");
	}

?>

  </body>
</html>
