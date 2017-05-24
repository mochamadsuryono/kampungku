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
   <title>Remove Villagers</title>
</head>
<body>

<h3>Do you really want to remove?</h3>
<form action="php_action/remove.php" method="post">
  <input type="hidden" name="id_villagers" value="<?php echo $data['id_villagers']?>"/>
  <button type="submit">Yes</button>
  <a href="index.php"><button type="button">No</button></a>
</form>

</body>
</html>
