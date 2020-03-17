<html>
  <head>
    <meta charset="utf-8" />
    <title> user </title>
  </head>

  <body bgcolor="aabbcc">

    <a href=./admin_table.php><h2>사용자 관리 페이지</h2></a>
    <h4>EWHA global</h4>

    <button onclick="location.href='logout.php'">home</button>
    <button onclick="location.href='registrater.php'">회원가입</button>
    <button onclick="location.href='http://127.0.0.1/phpmyadmin'">phpMyAdmin</button>
    <br><br/>

  <table border="3">
    <tr>
      <th> id </th>
      <th> name </th>
      <th> phone </th>
      <th> 가입여부 </th>
      <th> 기타정보 </th>
      <th> 가입일 </th>
      <th> 상세 </th>
    </tr>

        <?php
          include "dbconnect.php";
          $db = new mysqli($host, $dbid, $dbpw, $dbname);
          mysqli_set_charset($db, 'utf8');

            if ($db->connect_error){
              die("Connection failed: " . $db->connect_error);
            }
          $sql = "SELECT * FROM user_tbl";
          $result = $db->query($sql);

            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc())
            {
        ?>

    <tr>
      <td><?php echo $row["id"];?></td>
      <td><a href='./admin_part.php?name=<?=$row['name'];?>'><button><strong><?php echo $row["name"];?></strong></button></a></td>
      <td><?php echo $row["phone"];?></td>
      <td><?php echo $row["member_status"];?></td>
      <td><?php echo $row["information"];?></td>
      <td><?php echo $row["created_at"];?></td>
      <td><a href='admin_mod.php?id=<?=$row['id'];?>'><button>수정</button></a>
          <a href='admin_del.php?id=<?=$row['id'];?>'><button>삭제</button></a></td>
    </tr>

        <?php
              }
          }
          else {
              echo "0 results";
          }

        ?>
  </table>


      <?php
        $db->close();
       ?>

  </body>
</html>
