<?php
require_once 'php_action/db_connect.php';

if($_GET['id_visitor']){
  $id_visitor = $_GET['id_visitor'];

  $sql = "SELECT * FROM visitors WHERE id_visitor = {$id_visitor}";
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
          <th>Nama</th>
          <td><input type="text" name="name_visitor" placeholder="Nama" value="<?php echo $data['name_visitor']?>"/></td>
        </tr>
        <tr>
            <th>No KTP</th>
            <td><input type="text" name="no_ktp_visitor" placeholder="No KTP" value="<?php echo $data['no_ktp_visitor']?>"/></td>
        </tr>
        <tr>
            <th>Alamat Asal</th>
            <td><input type="text" name="address_visitor" placeholder="Alamat Asal" value="<?php echo $data['address_visitor']?>"/></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><input type="text" name="status_visitor" placeholder="Status" value="<?php echo $data['status_visitor']?>"/></td>
        </tr>
		<tr>
            <th>Keterangan</th>
            <td><input type="text" name="keterangan" placeholder="Keterangan" value="<?php echo $data['keterangan']?>"/></td>
        </tr>
        <tr>
          <input type="hidden" name="id_visitor" value=<?php echo $data['id_visitor']?> />
          <td><button type="submit">Save Changes</button></td>
          <td><a href="index.php"><button type="button">Back</button></td>
        </tr>
      </table>
    </form>

</fieldset>

</body>
</html>
