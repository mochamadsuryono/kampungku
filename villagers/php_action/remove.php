<<<<<<< HEAD
<?php
require_once 'db_connect.php';

if($_POST) {
  $id_villagers = $_POST['id_villagers'];

  $sql = "UPDATE villagers SET active = 2 where id_villagers = {$id_villagers}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully removed!</p>";
    echo "<a href='../index.php'><button type='button'>Back</button></a>";
  } else {
    echo "Error updating record : ".$connect->error;
  }
  $connect->close();
}
 ?>
=======
<?php
require_once 'db_connect.php';

if($_POST) {
  $id_villagers = $_POST['id_villagers'];

  $sql = "UPDATE villagers SET active = 2 where id_villagers = {$id_villagers}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully removed!</p>";
    echo "<a href='../index.php'><button type='button'>Back</button></a>";
  } else {
    echo "Error updating record : ".$connect->error;
  }
  $connect->close();
}
 ?>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
