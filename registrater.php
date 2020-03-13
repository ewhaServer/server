
<!DOCTYPE HTML>
<html>
<head>
	<title>이화로그인</title>

	<!-- 한글처리를 위한 meta 태그 -->
	<meta charset="utf-8">

	<!-- 모바일 웹페이지를 viewport 설정 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery Mobile 기능을 이용하기 위한 css, js 파일을 웹 상에서 불러오기 -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<script type="text/javascript">
function tocheckpw2() {
var PW = document.getElementById("password").value;
var pwck = document.getElementById("PwCheck").value;
if (PW != pwck) {
document.getElementById('pwsame').innerHTML = '비밀번호가 틀렸습니다. 다시 입력해 주세요';
return false;
}
} </script>

</head>

<body>
	<!-- 페이지 설정 -->
	<div data-role="page">

		<!-- 헤더 작성 -->
		<div data-role="header" data-theme="b">
		<table align="center">
		        <tbody>
			        <tr>
					<td><h3>이화글로벌 로그인</h3></td>
				</tr>
			</tbody>
		</table>
		</div>

		<!-- 본문 작성 -->
		<div data-role="content">
<form action="register.php" method="post" onsubmit="return tocheckpw2()" data-ajax="false">


	<h1>회원 가입</h1>
<label for="phone">전화번호</label>
<input type="text" name="phone"><br>
<label for="name">이름</label>
<input type="text" name="name"><br>
<label for="password">비밀번호</label>
<input type="password" id="password" name="password" required><br>
<label for="pwck">비밀번호 확인</label>
<input type="password" id="PwCheck" required><br>
<label for="address">농장주소</label>
<input type="text" name="address"><br>
<label for="information">농장명</label>
<input type="text" name="information"><br>
<label for="member_status">가입상태</label>
<input type="text" name="member_status"><br>
<label for="site_link">농장번호</label>
<input type="text" name="site_link"><br>

		<p id="pwsame" style="color:red;"></p> <br><br>


		<br />
		<input type="submit" value="확인">

<button onclick="location.href='index.php'">취소</button>
		</form>
		<p><br /></p>

		</div>

		<!-- 푸터 작성 -->
		<div data-role="footer" data-theme="b">
		</div>
	</div>
</body>
</html>
