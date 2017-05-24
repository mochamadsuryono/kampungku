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
   <title>Remove Letters</title>
</head>
<body>

<h3>Do you really want to remove?</h3>
<form action="php_action/remove.php" method="post">
  <input type="hidden" name="id_letter" value="<?php echo $data['id_letter']?>"/>
  <button type="submit">Yes</button>
  <a href="index.php"><button type="button">No</button></a>
</form>

</body>
</html>
