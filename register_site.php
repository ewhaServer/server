<?php

	include "dbconnect.php";

	function connect_db($host, $dbid, $dbpw, $dbname) {
		return mysqli_connect($host, $dbid, $dbpw, $dbname);
	}

	error_reporting(E_ALL^E_NOTICE);
	ini_set("display_errors", 1); //에러 발생시 표시하기 위한 부분

	$connect=connect_db($host, $dbid, $dbpw, $dbname);

	$data_stream1 = "'".$_POST['site_link']."','".$_POST['site_name']."',
									 '".$_POST['site_addr']."','".$_POST['site_information']."',
									 '".$_POST['site_status']."','".$_POST['device_link']."'";

	$query1 = "INSERT INTO site_tbl(site_link, site_name, site_addr, site_information, site_status, device_link)
						 VALUES (".$data_stream1.")";

	$result1 = mysqli_query($connect, $query1);

	mysqli_close($connect);
	echo ('가입이 완료되었습니다. 메인 화면으로 이동합니다..');
	echo("<meta http-equiv='Refresh' content='2; URL=registrater_device.php'>");

?>
