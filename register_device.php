<?php

	include "dbconnect.php";

	function connect_db($host, $dbid, $dbpw, $dbname) {
		return mysqli_connect($host, $dbid, $dbpw, $dbname);
	}

	error_reporting(E_ALL^E_NOTICE);
	ini_set("display_errors", 1); //에러 발생시 표시하기 위한 부분

	$connect=connect_db($host, $dbid, $dbpw, $dbname);

	$data_stream2 = "'".$_POST['type']."','".$_POST['hostname']."','".$_POST['http_port']."'
									,'".$_POST['relay1_status']."','".$_POST['relay1_alias']."'
									,'".$_POST['relay2_status']."','".$_POST['relay2_alias']."'
									,'".$_POST['relay3_status']."','".$_POST['relay3_alias']."'
									,'".$_POST['relay4_status']."','".$_POST['relay4_alias']."'
									,'".$_POST['relay5_status']."','".$_POST['relay5_alias']."'
									,'".$_POST['relay6_status']."','".$_POST['relay6_alias']."'
									,'".$_POST['relay7_status']."','".$_POST['relay7_alias']."'
									,'".$_POST['relay8_status']."','".$_POST['relay8_alias']."'
									,'".$_POST['device_information']."','".$_POST['device_link']."'";

	$query2 = "INSERT INTO device_tbl(type, hostname, http_port,relay1_status,relay1_alias,relay2_status,relay2_alias,relay3_status,relay3_alias,relay4_status,relay4_alias,relay5_status,relay5_alias,relay6_status,relay6_alias,relay7_status,relay7_alias,relay8_status,relay8_alias,device_information,device_link)
						 VALUES (".$data_stream2.")";

	$result2 = mysqli_query($connect, $query2);

	mysqli_close($connect);
	echo ('가입이 완료되었습니다. 메인 화면으로 이동합니다..');
	echo("<meta http-equiv='Refresh' content='2; URL=admin_table.php'>");

?>
