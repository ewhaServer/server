<?php

	include "dbconnect.php";

	function connect_db($host, $dbid, $dbpw, $dbname) {
		return mysqli_connect($host, $dbid, $dbpw, $dbname);
	}

	error_reporting(E_ALL^E_NOTICE);
	ini_set("display_errors", 1); //에러 발생시 표시하기 위한 부분

	$connect=connect_db($host, $dbid, $dbpw, $dbname);
	$data_stream = "'".$_POST['phone']."',
									'".$_POST['name']."',
									'".$_POST['password']."',
									'".$_POST['address']."',
									'".$_POST['information']."',
									'".$_POST['member_status']."',
									'".$_POST['site_link']."'
									";

	$query = "INSERT INTO user_tbl(phone, name, password, address, information, member_status, site_link)
	 					VALUES (".$data_stream.")";
	$result = mysqli_query($connect, $query);

	mysqli_close($connect);
	echo ('가입이 완료되었습니다. 상세정보를 기입해주십시오.');
	echo("<meta http-equiv='Refresh' content='1; URL=registrater_site.php'>");

?>
