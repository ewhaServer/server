<!DOCTYPE html>
<html>
  <head></head>
  <body>

	<?php
		session_start();
		session_destroy();

		header("Location:./index.php");
	//	echo("<meta http-equiv='Refresh' content='0; URL=./index.php'>");
	?>

  </body>
</html>