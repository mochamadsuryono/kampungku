<<<<<<< HEAD
<?php
require_once 'php_action/db_connect.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title> Database Penduduk Desa</title>

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
        <th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
        <th>Birth Place</th>
        <th>Birth Date</th>
        <th>No KTP</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Religion</th>
        <th>Job</th>
		<th>Photo</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM villagers WHERE active = 1";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo"<tr>
            <td>".$row['id_villagers']."</td>
            <td>".$row['name_villager']."</td>
			<td>".$row['email_villager']."</td>
			<td>".$row['password_villager']."</td>
			<td>".$row['phone_villager']."</td>
            <td>".$row['birth_place_villager']."</td>
            <td>".$row['birth_date_villager']."</td>
            <td>".$row['no_ktp_villager']."</td>
            <td>".$row['sex_villager']."</td>
            <td>".$row['address_villager']."</td>
            <td>".$row['religion_villager']."</td>
            <td>".$row['job']."</td>
			<td>".$row['photo_villager']."</td>
            <td>
              <a href='edit.php?id_villagers=".$row['id_villagers']."'><button type='button'>Edit</button></a>
              <a href='remove.php?id_villagers=".$row['id_villagers']."'><button type='button'>Remove</button></a>
          </tr>";
        }
      } else {
          echo "<tr><td colspan='14'><center>No Data Available</center></td></tr>";
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
   <title> Database Penduduk Desa</title>

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
        <th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
        <th>Birth Place</th>
        <th>Birth Date</th>
        <th>No KTP</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Religion</th>
        <th>Job</th>
		<th>Photo</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM villagers WHERE active = 1";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo"<tr>
            <td>".$row['id_villagers']."</td>
            <td>".$row['name_villager']."</td>
			<td>".$row['email_villager']."</td>
			<td>".$row['password_villager']."</td>
			<td>".$row['phone_villager']."</td>
            <td>".$row['birth_place_villager']."</td>
            <td>".$row['birth_date_villager']."</td>
            <td>".$row['no_ktp_villager']."</td>
            <td>".$row['sex_villager']."</td>
            <td>".$row['address_villager']."</td>
            <td>".$row['religion_villager']."</td>
            <td>".$row['job']."</td>
			<td>".$row['photo_villager']."</td>
            <td>
              <a href='edit.php?id_villagers=".$row['id_villagers']."'><button type='button'>Edit</button></a>
              <a href='remove.php?id_villagers=".$row['id_villagers']."'><button type='button'>Remove</button></a>
          </tr>";
        }
      } else {
          echo "<tr><td colspan='14'><center>No Data Available</center></td></tr>";
      }
       ?>
    </tbody>
  </table>
</div>

</body>
</html>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
