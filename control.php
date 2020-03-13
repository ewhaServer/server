
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

		<div data-role="page">

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
				<div data-role="fieldcontain">
  				<div id="idCtrlButton">
  				</div>
        </div>
			</div>

      <div data-role="footer" data-position="fixed" data-position="fixed">
        <div data-role="navbar">
          <ul>
          <li><a href="./user.php" data-icon="arrow-l">이전화면</a></li>
          <li><a href="./user.php" data-icon="home">메인화면</a></li>
          <li><a href="./logout.php" data-icon="delete">로그아웃</a></li>
          </ul>
        </div>
        <div style="text-align:center">
        <font color="#ffffff" size="3em">EHWA Global EWHAFARM Ver 1.0</font>
      </div>
      </div>

		</div>

	<script type="text/javascript">
<?php

	include "dbconnect.php";

	$phone = $_SESSION['phone'];

  $mysqli = mysqli_connect("$host","$dbid","$dbpw","$dbname");
  $check = "SELECT a.id AS id ,b.site_name FROM device_tbl a
            LEFT JOIN site_tbl b
            ON a.site_link=b.id
            LEFT JOIN user_tbl c
            ON b.user_link=c.id
            WHERE phone='$phone'
            ";
	$result = mysqli_query($mysqli, $check);
  $rows = mysqli_num_rows($result);

  $data =array();
  $i=0;

  	while($row = mysqli_fetch_row($result)){
      $data[$i]=$row[1];
      $i = $i +1;
    };
?>
    var dataAll = <?php echo json_encode($data) ?>;

    var tmpStr = "";

       console.log ("No. of siet = " + dataAll.length);

       for (var i=0; i< <?php echo $rows; ?>; i++){
          if(dataAll[i]==dataAll[i+1]){
            tmpStr +=
                      "<form method=\"GET\" action=\"site_check.php\">"
                      +"<input type=\"submit\" name=\"site_name\"  value=\""+dataAll[i]+"\"/>"+"<br>"
                      +"</input>"
                      +"</form>"
            break;
          }
          else{
            tmpStr +=
                      "<form method=\"GET\" action=\"site_check.php\">"
                      +"<input type=\"submit\" name=\"site_name\"  value=\""+dataAll[i]+"\"/>"+"<br>"
                      +"</input>"
                      +"</form>"
              };
          };


    console.log("tmpStr = "+tmpStr);

      $("#idCtrlButton").html(tmpStr);

    </script>
    </body>

  </html>
