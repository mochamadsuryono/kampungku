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
          <th>Penulis</th>
          <td><input type="text" name="author" placeholder="Penulis" /></td>
        </tr>
		<tr>
          <th>Judul</th>
          <td><input type="text" name="announcement_title" placeholder="Judul" /></td>
        </tr>
        <tr>
          <th>Isi</th>
          <td><input type="text" name="content" placeholder="Isi" /></td>
        </tr>
		<tr>
          <th>Foto</th>
          <td><input type="text" name="pic_announcement" placeholder="Foto" /></td>
        </tr>
		<tr>
          <th>Timestamp</th>
          <td><input type="date" name="timestamp" placeholder="Timestamp" /></td>
        </tr>
        <tr>
          <th>Status</th>
          <td><input type="text" name="status_announcement" placeholder="Status" /></td>
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
