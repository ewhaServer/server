<html>
<head></head>
<body bgcolor = "#f1f1f1">

  <h1>사용자 상세 정보</h1>
  <a href=./admin_table.php><button> home </button></a>
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

    $sql = "SELECT * FROM user_tbl";
    $result = $db->query($sql);

      if ($result->num_rows > 0){
          while($row = $result->fetch_assoc())
      {
        ?>

  <tr>
    <td><?php echo $row["id"];?></td>
    <td><a href='./admin_part.php?name=<?=$row['name'];?>'><?php echo $row["name"];?></a></td>
    <td><?php echo $row["phone"];?></td>
    <td><?php echo $row["member_status"];?></td>
  </tr>

      <?php
            }
        }
        else {
            echo "0 results";
        }

      ?>
      </table>
      <br>
      <table border="1">

        <tr>
          <th> id </th>
          <th> name </th>
          <th> site_name </th>
          <th> 가입여부 </th>
          <th> 기기 </th>
        </tr>

      <?php
      if(isset($_GET['name'])){
        $sql2 = "SELECT a.id AS id, name, site_name, site_status,type  FROM device_tbl a
                 LEFT JOIN site_tbl b
                 ON a.site_link=b.id
                 LEFT JOIN user_tbl c
                 ON b.user_link = c.id
                 WHERE name='{$_GET['name']}'";

        $result2 = mysqli_query($db, $sql2);
        $rows = mysqli_num_rows($result2);

        while($row = mysqli_fetch_array($result2)){

          $data=
            [
              "$row[id]",
              "$row[name]",
              "$row[site_name]",
              "$row[site_status]",
              "$row[type]"
            ]
          ;

      ?>

      <tr>
        <th> <?= $data[0];?> </th>
        <th> <?= $data[1];?></th>
        <th> <?= $data[2];?> </th>
        <th> <?= $data[3];?> </th>
        <th><a href='./admin_part.php?name=<?=$data[1];?>&id=<?=$data[0];?>'> <?= $data[4];?> </a></th>
      </tr>

      <?php
        }
      }
      ?>
        </table>
        <br>
        <table border="2">

          <tr>
            <th> id </th>
            <th> type </th>
            <th> hostname </th>
            <th> http_port </th>
            <th> information </th>
            <th> status </th>
          </tr>


        <?php
        if(isset($_GET['id'])){
          $sql3 = "SELECT  *  FROM device_tbl a
                   LEFT JOIN site_tbl b
                   ON a.site_link=b.id
                   LEFT JOIN user_tbl c
                   ON b.user_link = c.id
                   WHERE a.id='{$_GET['id']}'";

          $result3 = mysqli_query($db, $sql3);

          while($row = mysqli_fetch_array($result3)){

            $data=
              [
                "$row[id]",
                "$row[type]",
                "$row[hostname]",
                "$row[http_port]",
                "$row[device_information]",
                "$row[device_status]"
              ]
            ;

        ?>

        <tr>
          <th> <?= $data[0];?> </th>
          <th> <?= $data[1];?></th>
          <th> <?= $data[2];?> </th>
          <th> <?= $data[3];?> </th>
          <th> <?= $data[4];?> </th>
          <th> <?= $data[5];?> </th>
        </tr>
        <br>
  </table>

        <?php
          }
        }
        ?>

        <br>
        <table border="1">
        <th>relay</th>
        <th>alias</th>
        <th>status</th>

        <tr>
            <td>1</td>
            <td>relay1_alias</td>
            <td>relay1_status</td>
        </tr>

      </table>




      </body>
    </html>
