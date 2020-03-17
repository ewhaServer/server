<?php

	include "dbconnect.php";

	$connect = mysqli_connect($host, $dbid, $dbpw, $dbname);
	mysqli_set_charset($connect, 'utf8');

	error_reporting(E_ALL^E_NOTICE);
	ini_set("display_errors", 1); //에러 발생시 표시하기 위한 부분


	/*	$query = "
			UPDATE user_tbl
			SET 					 id ='".$_POST['id']."',
			 						phone ='".$_POST['phone']."',
									 name ='".$_POST['name']."',
					member_status ='".$_POST['member_status']."'
			WHERE user_tbl.id ={$_GET['id']}
			";
*/

	$tag = $_GET['tag'];


 		if($tag=='name'){
			$a = $_POST['name'];
			}
			else if($tag=='phone'){
			$a = $_POST['phone'];
			}
		 else{
				$a = $_POST['member_status'];
			}

		$query = "
								UPDATE user_tbl
								SET $tag = '$a'
								WHERE user_tbl.id ={$_GET['id']}
								";

			$check = "SELECT * FROM user_tbl
								WHERE id={$_GET['id']}
								 ";

	$result = mysqli_query($connect, $query);

	$res = mysqli_query($connect, $check);
	$row = mysqli_fetch_array($res);

		 header("Location:./admin_mod.php?id={$row['id']}");
		// echo $a;
		// echo $tag;

?>
