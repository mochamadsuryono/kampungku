<?php
require_once 'php_action/db_connect.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title> Database Pengumuman</title>

   <style type="text/css">
    .manageMember{
      width: 100%;
      margin: auto;
    }
    table {
      width: 100%;
      margin-top: 20px;
    }
  </style>

</head>
<body>
<div class="manageMember">
  <a href="create.php"><button type="button">Add Data</button></a>
  <table border="1" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th>ID</th>
		<th>Penulis</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Foto</th>
		<th>Timestamp</th>
        <th>Status</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM announcements WHERE active = 1";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo"<tr>
            <td>".$row['id_announcement']."</td>
			<td>".$row['author']."</td>
            <td>".$row['announcement_title']."</td>
            <td>".$row['content']."</td>
			<td>".$row['pic_announcement']."</td>
            <td>".$row['timestamp']."</td>
            <td>".$row['status_announcement']."</td>
            <td>
              <a href='edit.php?id_announcement=".$row['id_announcement']."'><button type='button'>Edit</button></a>
              <a href='remove.php?id_announcement=".$row['id_announcement']."'><button type='button'>Remove</button></a>
          </tr>";
        }
      } else {
          echo "<tr><td colspan='10'><center>No Data Available</center></td></tr>";
      }
       ?>
    </tbody>
  </table>
</div>

</body>
</html>
