<!DOCTYPE html>

<html>
    <head>
	      <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        	<title>ewhaglobal</title>
    </head>
    <body>
<!-- 선택창-->
		<div data-role="page" id="user">

			<div data-role="header"  data-theme= "d">
            <div style="text-align:right">
                <?php include "header.php" ?>
            	<font color="#353131" size="4em">님 안녕하세요</font>
            </div>
            <div style="text-align:left">
              <font color="#828282" size="8em">이화팜</font>
              <font color="#999999" size="5em">EWHAFARM</font>
            </div>

      </div>

			<div data-role="content">
				<!--<a href="./test3.php" data-role="button">농장제어</a>-->
        <button onclick="location.href='./control.php'">농장제어</button>
	      <a href="./qna.php" data-role="button">QnA</a>
				<a href="./manual.php" data-role="button">Manual</a>
			</div>

			<div data-role="footer" data-position="fixed" data-position="fixed">
        <div data-role="navbar">
          <ul>
          <li><a href="./control.php" data-icon="arrow-l">이전화면</a></li>
          <li><a href="./user.php" data-icon="home">메인화면</a></li>
          <li><a href="./logout.php" data-icon="delete">로그아웃</a></li>
          </ul>
        </div>
        <div style="text-align:center">
        <font color="#ffffff" size="3em">EHWA Global EWHAFARM Ver 1.0</font>
      </div>
			</div>
		</div>

    </body>

</html>
