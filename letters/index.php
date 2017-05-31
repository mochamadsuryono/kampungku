<<<<<<< HEAD
<?php
require_once 'php_action/db_connect.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title> Database Surat</title>

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
        <th>ID Surat</th>
        <th>Nama Penduduk</th>
        <th>ID Kategori</th>
		<th>KTP</th>
        <th>Akte</th>
        <th>Domisili</th>
        <th>SKTM</th>
        <th>Tanah</th>
        <th>Status Surat</th>
        <th>Isi</th>
        <th>Tanggal Kebutuhan</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM letters WHERE active = 1";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo"<tr>
            <td>".$row['id_letter']."</td>
            <td>".$row['author']."</td>
            <td>".$row['category_letter']."</td>
			<td>".$row['ktp']."</td>
            <td>".$row['akte']."</td>
            <td>".$row['domisili']."</td>
            <td>".$row['sktm']."</td>
            <td>".$row['tanah']."</td>
			<td>".$row['status_letter']."</td>
            <td>".$row['content_letter']."</td>
            <td>".$row['due_date']."</td>
            <td>
              <a href='edit.php?id_letter=".$row['id_letter']."'><button type='button'>Edit</button></a>
              <a href='remove.php?id_letter=".$row['id_letter']."'><button type='button'>Remove</button></a>
          </tr>";
        }
      } else {
          echo "<tr><td colspan='12'><center>No Data Available</center></td></tr>";
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
   <title> Database Surat</title>

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
        <th>ID Surat</th>
        <th>Nama Penduduk</th>
        <th>ID Kategori</th>
		<th>KTP</th>
        <th>Akte</th>
        <th>Domisili</th>
        <th>SKTM</th>
        <th>Tanah</th>
        <th>Status Surat</th>
        <th>Isi</th>
        <th>Tanggal Kebutuhan</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM letters WHERE active = 1";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo"<tr>
            <td>".$row['id_letter']."</td>
            <td>".$row['author']."</td>
            <td>".$row['category_letter']."</td>
			<td>".$row['ktp']."</td>
            <td>".$row['akte']."</td>
            <td>".$row['domisili']."</td>
            <td>".$row['sktm']."</td>
            <td>".$row['tanah']."</td>
			<td>".$row['status_letter']."</td>
            <td>".$row['content_letter']."</td>
            <td>".$row['due_date']."</td>
            <td>
              <a href='edit.php?id_letter=".$row['id_letter']."'><button type='button'>Edit</button></a>
              <a href='remove.php?id_letter=".$row['id_letter']."'><button type='button'>Remove</button></a>
          </tr>";
        }
      } else {
          echo "<tr><td colspan='12'><center>No Data Available</center></td></tr>";
      }
       ?>
    </tbody>
  </table>
</div>

</body>
</html>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
