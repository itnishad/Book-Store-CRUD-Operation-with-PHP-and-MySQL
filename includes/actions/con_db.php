<?php
	$host = 'localhost';
	$dbName = 'bookstore';
	$userName = 'root';
	$pwd = '';
	/*Connection*/
$dbCon = mysqli_connect($host, $userName, $pwd, $dbName);
@define(BASE, "http://localhost/bookStore/includes/contents/insertBook.php");
?>