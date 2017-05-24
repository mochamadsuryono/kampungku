<!DOCTYPE html>
<html>
<head>
  <title>Hello, Villagers!</title>

  <style type="text/css">
    fieldset {
      margin: 10px;
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
    <legend>Add Data Villagers</legend>
    <form action="php_action/create.php" method="post">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <th>Nama</th>
          <td><input type="text" name="name_villager" placeholder="Nama" /></td>
        </tr>
		<tr>
          <th>Email</th>
          <td><input type="email" name="email_villager" placeholder="Email" /></td>
        </tr>
		<tr>
          <th>Kata Sandi</th>
          <td><input type="password" name="password_villager" placeholder="Kata Sandi" /></td>
        </tr>
		<tr>
          <th>Nomor HP</th>
          <td><input type="number" name="phone_villager" placeholder="Nomor HP" /></td>
        </tr>
        <tr>
          <th>Tempat Kelahiran</th>
          <td><input type="text" name="birth_place_villager" placeholder="Tempat Kelahiran" /></td>
        </tr>
        <tr>
          <th>Tanggal Lahir</th>
          <td><input type="date" name="birth_date_villager" placeholder="Tanggal Lahir" /></td>
        </tr>
        <tr>
            <th>No KTP</th>
            <td><input type="text" name="no_ktp_villager" placeholder="No KTP" /></td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td><select name="sex_villager" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><input type="text" name="address_villager" placeholder="Alamat" /></td>
        </tr>
        <tr>
          <th>Agama</th>
          <td><select name="religion_villager" required>
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
          <td><input type="text" name="job" placeholder="Pekerjaan" /></td>
        </tr>
		<tr>
          <th>Foto</th>
          <td><input type="text" name="photo_villager" placeholder="Foto" /></td>
        </tr>
        <tr>
          <td><button type="submit">Save Changes</button></td>
          <td><a href="index.php"><button type="button">Back</button></td>
        </tr>
      </table>
    </form>

  </fieldset>

  </body>
  </html>
