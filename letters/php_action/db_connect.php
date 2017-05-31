<<<<<<< HEAD
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db_name = "kampungku";

//create connection
$connect = new mysqli($localhost, $username, $password, $db_name);

//check connection
if($connect->connect_error) {
  die("connection failed : ". $connect->connect_error);
} else {
//  echo "Successfully Connected";
}
 ?>
=======
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db_name = "kampungku";

//create connection
$connect = new mysqli($localhost, $username, $password, $db_name);

//check connection
if($connect->connect_error) {
  die("connection failed : ". $connect->connect_error);
} else {
//  echo "Successfully Connected";
}
 ?>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
