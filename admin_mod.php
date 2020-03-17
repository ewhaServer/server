<html>
  <head>
    <meta charset="utf-8" />
    <title> user </title>

    <style>
      .box{
        position: relative;
        background-color: white;
        margin-top: 1px;
      }
      </style>
  </head>

  <body bgcolor="aabbcc">

    <h2>사용자 정보 수정</h2>
    <h4>EWHA global</h4>

    <button onclick="location.href='http://127.0.0.1/phpmyadmin'">phpMyAdmin</button>
      <br><br/>

      <table border="5">
        <tr>
          <th> id </th>
          <th> name </th>
          <th> phone </th>
          <th> 가입여부</th>
        </tr>
            <?php
              include "dbconnect.php";
              $db = new mysqli($host, $dbid, $dbpw, $dbname);
              mysqli_set_charset($db, 'utf8');

                if ($db->connect_error){
                  die("Connection failed: " . $db->connect_error);
                }

                if(isset($_GET['id'])){
                  $sql = "SELECT * FROM user_tbl
                          WHERE id={$_GET['id']}";
                  $result = mysqli_query($db, $sql);
                  $row = mysqli_fetch_assoc($result);
            ?>

        <tr>
          <td><?php echo $row["id"]; ?></td>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["phone"]; ?></td>
          <td><?php echo $row["member_status"]; ?></td>
        </tr>

      </table>
      <br>
      <div data-role="content" class="box">
        <form action="modify.php?id=<?=$row['id']?>&tag=id" method="post" data-ajax="false">
          <label for="id">농장번호</label>
          <input type="text" name="id">
      		<input type="submit" value="수정">
      	</form>
      </div>

      <div data-role="content" class="box">
        <form action="modify.php?id=<?=$row['id']?>&tag=name" method="post" data-ajax="false">
          <label for="name">이름</label>
          <input type="text" name="name">
          <input type="submit" value="수정">
        </form>
      </div>

      <div data-role="content" class="box">
        <form action="modify.php?id=<?=$row['id']?>&tag=phone" method="post" data-ajax="false">
          <label for="phone">전화번호</label>
          <input type="text" name="phone">
      		<input type="submit" value="수정">
      	</form>
      </div>

      <div data-role="content" class="box">
        <form action="modify.php?id=<?=$row['id']?>& tag=member_status" method="post" data-ajax="false">
          <label for="member_status">가입상태</label>
          <input type="text" name="member_status">
      		<input type="submit" value="수정">
      	</form>
      </div>
      <a href='admin_table.php'><button>확인</button></a>
        <br><br/>
<?php
      }
  $db->close();
?>

  </body>
</html>
