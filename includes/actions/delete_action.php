<?php
require_once ("con_db.php");
/*DELETE*/
$dltID = $_GET['dltID'];
$sqlDelt = "DELETE FROM book WHERE id='$dltID'";
mysqli_query($dbCon,$sqlDelt);
header('Location: ' . "http://localhost/bookStore/index.php?page=bookList");
?>