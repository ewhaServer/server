
<!DOCTYPE html>

<html>
    <head>
		<title>ewhaglobal</title>

      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no" />

      <link rel="shortcut icon" href="../image/icon.png">
      <link rel="apple-touch-icon" href="../image/icon.png">
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />

      <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

      <script type="text/javascript" src="./et0808.js"></script>

<style>
  .select {
    border : 2px solid #bcbcbc;
    padding-left: 20px;
    background-color: white;
    margin-top:  5px;
  }
</style>

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
				<div data-role="fieldcontain" id="main">

          <font color="#999999" size="5em"> 농장제어</font>
            <div id="idCtrlButton">
  				  </div>

        </div>
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

	<script type="text/javascript">

<?php

    $id = $_SESSION['site_name'];

    $mysqli = mysqli_connect("localhost","root","ewha0110","ewhaglobal");
		$check = "SELECT * FROM device_tbl a
              LEFT JOIN site_tbl b
              ON a.site_link=b.id
              WHERE site_name='$id'
  				   ";

		$result = mysqli_query($mysqli, $check);

		while($row = mysqli_fetch_array($result))
    {
        $dataAll =
            "{
                IP : '$row[hostname]',
                HTTP_Port : '$row[http_port]',

                site_name : '$row[site_name]',
                relay :
                [
                    {
                      status : '$row[relay1_status]',
                      alias : '$row[relay1_alias]'
                    },
                    {
                      status : '$row[relay2_status]',
                      alias : '$row[relay2_alias]'
                    },
                    {
                      status : '$row[relay3_status]',
                      alias : '$row[relay3_alias]'
                    },
                    {
                      status : '$row[relay4_status]',
                      alias : '$row[relay4_alias]'
                    },
                    {
                      status : '$row[relay5_status]',
                      alias : '$row[relay5_alias]'
                    },
                    {
                      status : '$row[relay6_status]',
                      alias : '$row[relay6_alias]'
                    },
                    {
                      status : '$row[relay7_status]',
                      alias : '$row[relay7_alias]'
                    },
                    {
                      status : '$row[relay8_status]',
                      alias : '$row[relay8_alias]'
                    }
                ]
            }";
    };
  ?>
    var dataAll = <?php echo $dataAll; ?>;

     var tmpStr = "";

        for (var i=0; i<8; i++) {   // loop for PIC-2000
         if (dataAll.relay[i].status == "1") {
           tmpStr +=
              "<div class=\"select\">"+
            "<fieldset class=\"ui-grid-b\">"
              +"<div class=\"ui-block-a\">"
              +"<div align=\"center\" top=\"10px\">"
              +"<font size=\"4em\">"
                +"<br>"+dataAll.relay[i].alias+"</font>"
                +"</div>"
              +"</div>"
              +"<div class=\"ui-block-b\">"
                +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');\" value=\"on\">"
              +"</div>"
              +"<div class=\"ui-block-c\">"
                +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'open');\" value=\"off\">"
              +"</div>"
              +"</fieldset>"
              +"</div>"
          ;

          };
      };

      $("#idCtrlButton").html(tmpStr);


	function doCtrlData(str, status) {
		var sendData = { };
		var key = 'OutputPin._' + str + '.Status';

		sendData[key] = status;

		var jData = { "IP": dataAll.IP, "HTTP_Port": dataAll.HTTP_Port, "Account":"root", "Password":"ewha4321!" };

		var retData = SystemCommand(sendData, onCallbackFunc, jData);
	}

	var onCallbackFunc = function(receiveData) {
		console.log("onCallbackFunc() :: " + JSON.stringify(sendData));
	}

	</script>
    </body>

</html>
