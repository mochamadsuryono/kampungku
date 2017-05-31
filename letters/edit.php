<<<<<<< HEAD
<?php
require_once 'php_action/db_connect.php';

if($_GET['id_letter']){
  $id_letter = $_GET['id_letter'];

  $sql = "SELECT * FROM letters WHERE id_letter = {$id_letter}";
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
          <th>Isi</th>
          <td><input type="text" name="content_letter" placeholder="Isi" value="<?php echo $data['content_letter']?>"/></td>
        </tr>
        <tr>
          <th>Tanggal Kebutuhan</th>
          <td><input type="date" name="due_date" placeholder="Tanggal Kebutuhan" value="<?php echo $data['due_date']?>"/></td>
        </tr>
		<tr>
		<th>Kategori Surat</th>
          <td><select name="category_letter" value="<?php echo $data['category_letter']?>" required>
            <option value="">Pilih Kategori Surat</option>
            <option value="SURAT PENGANTAR PEMBUATAN KTP" value="<?php echo $data['ktp']?>">SURAT PENGANTAR PEMBUATAN KTP</option>
            <option value="SURAT PENGANTAR AKTE KELAHIRAN" value="<?php echo $data['akte']?>">SURAT PENGANTAR AKTE KELAHIRAN</option>
            <option value="SURAT KETERANGAN DOMISILI" value="<?php echo $data['domisili']?>">SURAT KETERANGAN DOMISILI</option>
            <option value="SURAT KETERANGAN TIDAK MAMPU (SKTM)" value="<?php echo $data['sktm']?>">SURAT KETERANGAN TIDAK MAMPU (SKTM)</option>
            <option value="SURAT KETERANGAN TANAH" value="<?php echo $data['tanah']?>">SURAT KETERANGAN TANAH</option>
            </select></td>
		</tr>
		<tr>
          <th>Status Surat</th>
          <td><input type="text" name="status_letter" placeholder="Status Letter" value="<?php echo $data['status_letter']?>"/></td>
        </tr>
        <tr>
          <input type="hidden" name="id_letter" value=<?php echo $data['id_letter']?> />
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

if($_GET['id_letter']){
  $id_letter = $_GET['id_letter'];

  $sql = "SELECT * FROM letters WHERE id_letter = {$id_letter}";
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
          <th>Isi</th>
          <td><input type="text" name="content_letter" placeholder="Isi" value="<?php echo $data['content_letter']?>"/></td>
        </tr>
        <tr>
          <th>Tanggal Kebutuhan</th>
          <td><input type="date" name="due_date" placeholder="Tanggal Kebutuhan" value="<?php echo $data['due_date']?>"/></td>
        </tr>
		<tr>
		<th>Kategori Surat</th>
          <td><select name="category_letter" value="<?php echo $data['category_letter']?>" required>
            <option value="">Pilih Kategori Surat</option>
            <option value="SURAT PENGANTAR PEMBUATAN KTP" value="<?php echo $data['ktp']?>">SURAT PENGANTAR PEMBUATAN KTP</option>
            <option value="SURAT PENGANTAR AKTE KELAHIRAN" value="<?php echo $data['akte']?>">SURAT PENGANTAR AKTE KELAHIRAN</option>
            <option value="SURAT KETERANGAN DOMISILI" value="<?php echo $data['domisili']?>">SURAT KETERANGAN DOMISILI</option>
            <option value="SURAT KETERANGAN TIDAK MAMPU (SKTM)" value="<?php echo $data['sktm']?>">SURAT KETERANGAN TIDAK MAMPU (SKTM)</option>
            <option value="SURAT KETERANGAN TANAH" value="<?php echo $data['tanah']?>">SURAT KETERANGAN TANAH</option>
            </select></td>
		</tr>
		<tr>
          <th>Status Surat</th>
          <td><input type="text" name="status_letter" placeholder="Status Letter" value="<?php echo $data['status_letter']?>"/></td>
        </tr>
        <tr>
          <input type="hidden" name="id_letter" value=<?php echo $data['id_letter']?> />
          <td><button type="submit">Save Changes</button></td>
          <td><a href="index.php"><button type="button">Back</button></td>
        </tr>
      </table>
    </form>

</fieldset>

</body>
</html>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
