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
#btn button{
  border : 2px solid red;
  background-color: red;
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

		$check = "SELECT * FROM module a
              LEFT JOIN device_tbl b
              ON a.device_link = b.id
              LEFT JOIN site_tbl c
              ON b.site_link=c.id
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
                      type : '$row[relay1_type]',
                      status : '$row[relay1_status]',
                      alias : '$row[relay1_alias]'
                    },
                    {
                        type : '$row[relay2_type]',
                      status : '$row[relay2_status]',
                      alias : '$row[relay2_alias]'
                    },
                    {
                      type : '$row[relay3_type]',
                      status : '$row[relay3_status]',
                      alias : '$row[relay3_alias]'
                    },
                    {
                      type : '$row[relay4_type]',
                      status : '$row[relay4_status]',
                      alias : '$row[relay4_alias]'
                    },
                    {
                      type : '$row[relay5_type]',
                      status : '$row[relay5_status]',
                      alias : '$row[relay5_alias]'
                    },
                    {
                      type : '$row[relay6_type]',
                      status : '$row[relay6_status]',
                      alias : '$row[relay6_alias]'
                    },
                    {
                      type : '$row[relay7_type]',
                      status : '$row[relay7_status]',
                      alias : '$row[relay7_alias]'
                    },
                    {
                      type : '$row[relay8_type]',
                      status : '$row[relay8_status]',
                      alias : '$row[relay8_alias]'
                    }
                ]
            }";
    };
  ?>
    var dataAll = <?php echo $dataAll; ?>;

     var tmpStr = "";

        for (var i=4; i<8; i++) {
           // loop for PIC-2000
   if (dataAll.relay[i].type == "fan") {

           tmpStr +=
              "<div class=\"select\" id=\"btn\">"+
            "<fieldset class=\"ui-grid-d\">"
              +"<div class=\"ui-block-a\">"
              +"<div align=\"center\" top=\"10px\">"
              +"<font size=\"4em\">"
                +"<br>"+dataAll.relay[i].alias+"</font>"
                +"</div>"
              +"</div>"
              +"<div class=\"ui-block-b\">"
                +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');\" value=\"1단\"/>"
  +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');doCtrlData("+(4)+", 'close');doCtrlData("+(3)+", 'open');\" value=\"5단\"/>"
              +"</div>"
              +"<div class=\"ui-block-c\">"
                +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');doCtrlData("+(1)+", 'close');\" value=\"2단\"/>"
                +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');doCtrlData("+(1)+", 'close');doCtrlData("+(2)+", 'close');doCtrlData("+(4)+", 'open');\" value=\"6단\"/>"
              +"</div>"
              +"<div class=\"ui-block-d\">"
                +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');doCtrlData("+(2)+", 'close');doCtrlData("+(1)+", 'open');\" value=\"3단\"/>"
+"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');doCtrlData("+(1)+", 'close');doCtrlData("+(3)+", 'close');doCtrlData("+(2)+", 'open');\" value=\"7단\"/>"
              +"</div>"
              +"<div class=\"ui-block-e\">"
                +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');doCtrlData("+(3)+", 'close');doCtrlData("+(2)+", 'open');\" value=\"4단\"/>"
                +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'close');doCtrlData("+(1)+", 'close');doCtrlData("+(4)+", 'close');doCtrlData("+(3)+", 'open');\" value=\"8단\"/>"
  +"<input type=\"button\" onclick=\"doCtrlData("+(i+1)+", 'open');doCtrlData("+(1)+", 'open');doCtrlData("+(2)+", 'open');doCtrlData("+(3)+", 'open');doCtrlData("+(4)+", 'open');\" value=\"off\"/>"
              +"</div>"
              +"</fieldset>"
              +"</div>"
          ;

        }
      };


//if( #2의 on 버튼 클릭시 #1의 off버튼 작동)
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
