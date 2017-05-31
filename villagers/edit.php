<<<<<<< HEAD
<?php
require_once 'php_action/db_connect.php';

if($_GET['id_villagers']){
  $id_villagers = $_GET['id_villagers'];

  $sql = "SELECT * FROM villagers WHERE id_villagers = {$id_villagers}";
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
          <td><input type="text" name="name_villager" placeholder="Nama" value="<?php echo $data['name_villager']?>"/></td>
        </tr>
		<tr>
          <th>Email</th>
          <td><input type="email" name="email_villager" placeholder="Email" value="<?php echo $data['email_villager']?>"/></td>
        </tr>
		<tr>
          <th>Kata Sandi</th>
          <td><input type="password" name="password_villager" placeholder="Kata Sandi" value="<?php echo $data['password_villager']?>"/></td>
        </tr>
		<tr>
          <th>Nomor HP</th>
          <td><input type="number" name="phone_villager" placeholder="Nomor HP" value="<?php echo $data['phone_villager']?>"/></td>
        </tr>
        <tr>
          <th>Tempat Kelahiran</th>
          <td><input type="text" name="birth_place_villager" placeholder="Tempat Kelahiran" value="<?php echo $data['birth_place_villager']?>"/></td>
        </tr>
        <tr>
          <th>Tanggal Lahir</th>
          <td><input type="date" name="birth_date_villager" placeholder="Tanggal Lahir" value="<?php echo $data['birth_date_villager']?>"/></td>
        </tr>
        <tr>
            <th>No KTP</th>
            <td><input type="text" name="no_ktp_villager" placeholder="No KTP" value="<?php echo $data['no_ktp_villager']?>"/></td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td><select name="sex_villager" value="<?php echo $data['sex_villager']?>"required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><input type="text" name="address_villager" placeholder="Alamat" value="<?php echo $data['address_villager']?>"/></td>
        </tr>
        <tr>
          <th>Agama</th>
          <td><select name="religion_villager" value="<?php echo $data['religion_villager']?>" required>
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Protestan">Protestan</option>
                <option value="Konghuchu">Nasrani</option>
             </select></td>
        </tr>
        <tr>
          <th>Pekerjaan</th>
          <td><input type="text" name="job" placeholder="Pekerjaan" value="<?php echo $data['job']?>"/></td>
        </tr>
		<tr>
          <th>Foto</th>
          <td><input type="text" name="photo_villager" placeholder="Foto" value="<?php echo $data['photo_villager']?>"/></td>
        </tr>
        <tr>
          <input type="hidden" name="id_villagers" value=<?php echo $data['id_villagers']?> />
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

if($_GET['id_villagers']){
  $id_villagers = $_GET['id_villagers'];

  $sql = "SELECT * FROM villagers WHERE id_villagers = {$id_villagers}";
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
          <td><input type="text" name="name_villager" placeholder="Nama" value="<?php echo $data['name_villager']?>"/></td>
        </tr>
		<tr>
          <th>Email</th>
          <td><input type="email" name="email_villager" placeholder="Email" value="<?php echo $data['email_villager']?>"/></td>
        </tr>
		<tr>
          <th>Kata Sandi</th>
          <td><input type="password" name="password_villager" placeholder="Kata Sandi" value="<?php echo $data['password_villager']?>"/></td>
        </tr>
		<tr>
          <th>Nomor HP</th>
          <td><input type="number" name="phone_villager" placeholder="Nomor HP" value="<?php echo $data['phone_villager']?>"/></td>
        </tr>
        <tr>
          <th>Tempat Kelahiran</th>
          <td><input type="text" name="birth_place_villager" placeholder="Tempat Kelahiran" value="<?php echo $data['birth_place_villager']?>"/></td>
        </tr>
        <tr>
          <th>Tanggal Lahir</th>
          <td><input type="date" name="birth_date_villager" placeholder="Tanggal Lahir" value="<?php echo $data['birth_date_villager']?>"/></td>
        </tr>
        <tr>
            <th>No KTP</th>
            <td><input type="text" name="no_ktp_villager" placeholder="No KTP" value="<?php echo $data['no_ktp_villager']?>"/></td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td><select name="sex_villager" value="<?php echo $data['sex_villager']?>"required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><input type="text" name="address_villager" placeholder="Alamat" value="<?php echo $data['address_villager']?>"/></td>
        </tr>
        <tr>
          <th>Agama</th>
          <td><select name="religion_villager" value="<?php echo $data['religion_villager']?>" required>
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Protestan">Protestan</option>
                <option value="Konghuchu">Nasrani</option>
             </select></td>
        </tr>
        <tr>
          <th>Pekerjaan</th>
          <td><input type="text" name="job" placeholder="Pekerjaan" value="<?php echo $data['job']?>"/></td>
        </tr>
		<tr>
          <th>Foto</th>
          <td><input type="text" name="photo_villager" placeholder="Foto" value="<?php echo $data['photo_villager']?>"/></td>
        </tr>
        <tr>
          <input type="hidden" name="id_villagers" value=<?php echo $data['id_villagers']?> />
          <td><button type="submit">Save Changes</button></td>
          <td><a href="index.php"><button type="button">Back</button></td>
        </tr>
      </table>
    </form>

</fieldset>

</body>
</html>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
