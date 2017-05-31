<<<<<<< HEAD
<?php
require_once 'php_action/db_connect.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title> Database Tamu</title>

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
        <th>ID Visitor</th>
        <th>Name Villager</th>
        <th>Name</th>
        <th>No KTP</th>
        <th>Address Visitor</th>
        <th>Status</th>
		<th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM visitors WHERE active = 1";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo"<tr>
            <td>".$row['id_visitor']."</td>
            <td>".$row['author']."</td>
            <td>".$row['name_visitor']."</td>
            <td>".$row['no_ktp_visitor']."</td>
            <td>".$row['address_visitor']."</td>
            <td>".$row['status_visitor']."</td>
			<td>".$row['keterangan']."</td>
            <td>
              <a href='edit.php?id_visitor=".$row['id_visitor']."'><button type='button'>Edit</button></a>
              <a href='remove.php?id_visitor=".$row['id_visitor']."'><button type='button'>Remove</button></a>
          </tr>";
        }
      } else {
          echo "<tr><td colspan='8'><center>No Data Available</center></td></tr>";
      }
       ?>
    </tbody>
  </table>
</div>

</body>
</html>
=======
<?php
require_once 'php_action/db_connect.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title> Database Tamu</title>

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
        <th>ID Visitor</th>
        <th>Name Villager</th>
        <th>Name</th>
        <th>No KTP</th>
        <th>Address Visitor</th>
        <th>Status</th>
		<th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM visitors WHERE active = 1";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo"<tr>
            <td>".$row['id_visitor']."</td>
            <td>".$row['author']."</td>
            <td>".$row['name_visitor']."</td>
            <td>".$row['no_ktp_visitor']."</td>
            <td>".$row['address_visitor']."</td>
            <td>".$row['status_visitor']."</td>
			<td>".$row['keterangan']."</td>
            <td>
              <a href='edit.php?id_visitor=".$row['id_visitor']."'><button type='button'>Edit</button></a>
              <a href='remove.php?id_visitor=".$row['id_visitor']."'><button type='button'>Remove</button></a>
          </tr>";
        }
      } else {
          echo "<tr><td colspan='8'><center>No Data Available</center></td></tr>";
      }
       ?>
    </tbody>
  </table>
</div>

</body>
</html>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
