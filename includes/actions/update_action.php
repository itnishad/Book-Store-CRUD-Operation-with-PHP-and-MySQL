<?php
session_start();
require_once ("con_db.php");
if (isset($_POST['btnUpdt']) == "Update") {
	
	$ID = $_POST['ID'];	
	$title = $_POST['title'];	
	$author = $_POST['author'];	
	$summary = $_POST['summary'];
    $price = $_POST['price'];	
	$category = $_POST['cat'];

	/*Update into tbl_info*/
	$updtSQL= "UPDATE book SET title='$title',author='$author',summary='$summary',price='$price',category='$category' WHERE id='$ID'";
	$updtQry = @mysqli_query($dbCon,$updtSQL) or die("Error in Table Info Update: ".mysqli_error($dbCon));
	/*Success or Error Message*/
	if($updtQry){
		$_SESSION['msg_update'] = "<h4 style='color:blue; text-align: center;'>Data Succefully Updated</h4>";
	}else{
		$_SESSION['msg_update'] = "<h4 style='color:red; text-align: center;'>Not Updated</h4>";
	}
	header('Location: ' . "http://localhost/bookStore/index.php?page=bookList");
}
?>