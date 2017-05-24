<!DOCTYPE html>
<html>
<head>
  <title>Add Data</title>

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
    <legend>Add Data</legend>
    <form action="php_action/create.php" method="post">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <th>Isi</th>
          <td><input type="text" name="content_letter" placeholder="Isi" /></td>
        </tr>
        <tr>
          <th>Tanggal Kebutuhan</th>
          <td><input type="date" name="due_date" placeholder="Tanggal Kebutuhan" /></td>
        </tr>
		<tr>
		<th>Kategori Surat</th>
          <td><select name="category_letter" required>
                <option value="">Pilih Kategori Surat</option>
                <option value="SURAT PENGANTAR PEMBUATAN KTP">SURAT PENGANTAR PEMBUATAN KTP</option>
                <option value="SURAT PENGANTAR AKTE KELAHIRAN">SURAT PENGANTAR AKTE KELAHIRAN</option>
                <option value="SURAT KETERANGAN DOMISILI">SURAT KETERANGAN DOMISILI</option>
                <option value="SURAT KETERANGAN TIDAK MAMPU (SKTM)">SURAT KETERANGAN TIDAK MAMPU (SKTM)</option>
                <option value="SURAT KETERANGAN TANAH">SURAT KETERANGAN TANAH</option>
             </select></td>
		</tr>
		<tr>
          <th>Status Surat</th>
          <td><input type="text" name="status_letter" placeholder="Status Letter" /></td>
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
