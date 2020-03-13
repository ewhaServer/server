
<!DOCTYPE HTML>
<html>
<head>
	<title>가입자 상세 정보</title>

	<!-- 한글처리를 위한 meta 태그 -->
	<meta charset="utf-8">

	<!-- 모바일 웹페이지를 viewport 설정 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery Mobile 기능을 이용하기 위한 css, js 파일을 웹 상에서 불러오기 -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<script type="text/javascript">
</script>

</head>

<body>
	<!-- 페이지 설정 -->
	<div data-role="page">

		<!-- 헤더 작성 -->
		<div data-role="header" data-theme="b">
			<table align="center">
		        <tbody>
			        <tr>
						<td><h3>상세정보</h3></td>
					</tr>
				</tbody>
			</table>
		</div>

<!------------------------ 본문 작성 ---------------------------------------->
		<div data-role="content">
<form action="register_device.php" method="post" data-ajax="false">

<h2>장치정보기입</h2>
<br>
<label for="type">장치</label>
<input type="text" name="type">
<label for="hostname">hostname</label>
<input type="text" name="hostname">
<label for="http_port">port</label>
<input type="text" name="http_port">
<label for="relay1_status">릴레이1</label>
<input type="text" name="relay1_status">
<label for="relay1_alias">기능1</label>
<input type="text" name="relay1_alias">
<label for="relay2_status">릴레이2</label>
<input type="text" name="relay2_status">
<label for="relay2_alias">기능2</label>
<input type="text" name="relay2_alias">
<label for="relay3_status">릴레이3</label>
<input type="text" name="relay3_status">
<label for="relay3_alias">기능3</label>
<input type="text" name="relay3_alias">
<label for="relay4_status">릴레이4</label>
<input type="text" name="relay4_status">
<label for="relay4_alias">기능4</label>
<input type="text" name="relay4_alias">
<label for="relay5_status">릴레이5</label>
<input type="text" name="relay5_status">
<label for="relay5_alias">기능5</label>
<input type="text" name="relay5_alias">
<label for="relay6_status">릴레이6</label>
<input type="text" name="relay6_status">
<label for="relay6_alias">기능6</label>
<input type="text" name="relay6_alias">
<label for="relay7_status">릴레이7</label>
<input type="text" name="relay7_status">
<label for="relay7_alias">기능7</label>
<input type="text" name="relay7_alias">
<label for="relay8_status">릴레이8</label>
<input type="text" name="relay8_status">
<label for="relay8_alias">기능8</label>
<input type="text" name="relay8_alias">

<label for="device_information">기타정보</label>
<input type="text" name="device_information">
<label for="device_link">장치번호</label>
<input type="text" name="device_link">

		<br />
		<input type="submit" value="확인">

<button onclick="location.href='test2.php'">취소</button>
		</form>
		<p><br /></p>

		</div>

		<!-- 푸터 작성 -->
		<div data-role="footer" data-theme="b">
		</div>
	</div>
</body>
</html>
