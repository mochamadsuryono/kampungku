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
   <title>Remove Visitors</title>
</head>
<body>

<h3>Do you really want to remove?</h3>
<form action="php_action/remove.php" method="post">
  <input type="hidden" name="id_visitor" value="<?php echo $data['id_visitor']?>"/>
  <button type="submit">Yes</button>
  <a href="index.php"><button type="button">No</button></a>
</form>

</body>
</html>
