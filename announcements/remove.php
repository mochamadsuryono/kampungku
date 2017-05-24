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
   <title>Remove Announcements</title>
</head>
<body>

<h3>Do you really want to remove?</h3>
<form action="php_action/remove.php" method="post">
  <input type="hidden" name="id_announcement" value="<?php echo $data['id_announcement']?>"/>
  <button type="submit">Yes</button>
  <a href="index.php"><button type="button">No</button></a>
</form>

</body>
</html>
