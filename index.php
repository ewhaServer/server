
<!DOCTYPE html>

<html>

  <head>
	    <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />

      <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

        <title>ewha farm v1.0</title>

      <style>
        .login{
          position: relative;
          background-color: white;
        }
        .custom-corners .ui-bar {
          position: relative;
          padding: 13px;
          -webkit-border-top-left-radius: inherit;
          border-top-left-radius: inherit;
          -webkit-border-top-right-radius: inherit;
          border-top-right-radius: inherit;
          margin-top:  120px;
          margin-left:   40px;
          margin-right:  40px;
        }
        .custom-corners .ui-body {
          border-top-width: 0;
          padding-top: 30px;
          -webkit-border-bottom-left-radius: inherit;
          border-bottom-left-radius: inherit;
          -webkit-border-bottom-right-radius: inherit;
          border-bottom-right-radius: inherit;
          margin-left:   40px;
          margin-right:   40px;
          margin-bottom:   100px;
       }
        .ewha{

          width : 200px;
          height : 80px;
          margin-top: 10px;
          margin-bottom : 80px;
          margin-left: auto;
          margin-right: auto;
          display: block;

        }

      </style>
  </head>
    <body>
     <div data-role="page">

      <div data-role ="header" data-theme= "d">
        <div style="text-align:center">
	        <font color="#878787" size="6em" style="italic">EWHAFARM</font>
          <font color="white" size="2em" style="italic">농장원격제어</font>
	      </div>

      </div>

      <div data-role = "content">

          <div class="ui-corner-all custom-corners">

            <div class="ui-bar ui-bar-c">
              <h1>로그인</h1>
            </div>

  				<div class="ui-body ui-body-d">
            <div class="login">
              <form method="POST" action="login_check.php">
            	   <label for="phone"></label>
  						   <input type="text" name="phone" placeholder="전화번호"/>
  						   <label for="pw"></label>
    						 <input type="text" name="pw" placeholder="비밀번호"/>
                 <br>
                 <input type="submit" value="로그인" />
              </form>
					   </div>
           </div>

         </div>

      </div>

      <div data-position="fixed" background-color ="white">
         <img class="ewha" src= "./ewha9.png">
       </div>

     </div>
  </body>
</html>
