<<<<<<< HEAD
<?php
require_once 'php_action/db_connect.php';

if($_GET['id_announcement']){
  $id_announcement = $_GET['id_announcement'];

  $sql = "SELECT * FROM announcements WHERE id_announcement = {$id_announcement}";
  $result = $connect->query($sql);

  $data = $result->fetch_assoc();

  $connect->close();
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Edit Data</title>

   <style type="text/css">
   fieldset{
     margin: auto;
     margin-top: 100px;
     width: 100%;
   }
   table tr th {
     padding-top: 20px;
   }
   </style>
 </head>
 <body>

  <fieldset>
    <legend>Edit Data</legend>
    <form action="php_action/update.php" method="post">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <th>Penulis</th>
          <td><input type="text" name="author" placeholder="Penulis" value="<?php echo $data['author']?>"/></td>
        </tr>
		<tr>
          <th>Judul</th>
          <td><input type="text" name="announcement_title" placeholder="Judul" value="<?php echo $data['announcement_title']?>"/></td>
        </tr>
        <tr>
          <th>Isi</th>
          <td><input type="text" name="content" placeholder="Isi" value="<?php echo $data['content']?>"/></td>
        </tr>
		<tr>
          <th>Foto</th>
          <td><input type="text" name="pic_announcement" placeholder="Foto" value="<?php echo $data['pic_announcement']?>"/></td>
        </tr>
		<tr>
          <th>Timestamp</th>
          <td><input type="date" name="timestamp" placeholder="Timestamp" value="<?php echo $data['timestamp']?>"/></td>
        </tr>
        <tr>
          <th>Status</th>
          <td><input type="text" name="status_announcement" placeholder="Status" value="<?php echo $data['status_announcement']?>"/></td>
        </tr>
        <tr>
          <input type="hidden" name="id_announcement" value=<?php echo $data['id_announcement']?> />
          <td><button type="submit">Save Changes</button></td>
          <td><a href="index.php"><button type="button">Back</button></td>
        </tr>
      </table>
    </form>

</fieldset>

</body>
</html>
=======
<?php
require_once 'php_action/db_connect.php';

if($_GET['id_announcement']){
  $id_announcement = $_GET['id_announcement'];

  $sql = "SELECT * FROM announcements WHERE id_announcement = {$id_announcement}";
  $result = $connect->query($sql);

  $data = $result->fetch_assoc();

  $connect->close();
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Edit Data</title>

   <style type="text/css">
   fieldset{
     margin: auto;
     margin-top: 100px;
     width: 100%;
   }
   table tr th {
     padding-top: 20px;
   }
   </style>
 </head>
 <body>

  <fieldset>
    <legend>Edit Data</legend>
    <form action="php_action/update.php" method="post">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <th>Penulis</th>
          <td><input type="text" name="author" placeholder="Penulis" value="<?php echo $data['author']?>"/></td>
        </tr>
		<tr>
          <th>Judul</th>
          <td><input type="text" name="announcement_title" placeholder="Judul" value="<?php echo $data['announcement_title']?>"/></td>
        </tr>
        <tr>
          <th>Isi</th>
          <td><input type="text" name="content" placeholder="Isi" value="<?php echo $data['content']?>"/></td>
        </tr>
		<tr>
          <th>Foto</th>
          <td><input type="text" name="pic_announcement" placeholder="Foto" value="<?php echo $data['pic_announcement']?>"/></td>
        </tr>
		<tr>
          <th>Timestamp</th>
          <td><input type="date" name="timestamp" placeholder="Timestamp" value="<?php echo $data['timestamp']?>"/></td>
        </tr>
        <tr>
          <th>Status</th>
          <td><input type="text" name="status_announcement" placeholder="Status" value="<?php echo $data['status_announcement']?>"/></td>
        </tr>
        <tr>
          <input type="hidden" name="id_announcement" value=<?php echo $data['id_announcement']?> />
          <td><button type="submit">Save Changes</button></td>
          <td><a href="index.php"><button type="button">Back</button></td>
        </tr>
      </table>
    </form>

</fieldset>

</body>
</html>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
