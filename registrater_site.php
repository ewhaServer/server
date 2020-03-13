
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
<form action="register_site.php" method="post" data-ajax="false">
<h2>농장정보기입</h2>
<label for="site_link">농장 번호</label>
<input type="text" name="site_link">
<label for="site_name">농장명</label>
<input type="text" name="site_name">
<label for="site_addr">농장주소</label>
<input type="text" name="site_addr">
<label for="site_information">농장정보</label>
<input type="text" name="site_information">
<label for="site_status">농장가입여부</label>
<input type="text" name="site_status">
<label for="device_link">장치 번호</label>
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
