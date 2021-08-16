<?php
session_start();
require_once("con_db.php");

if (isset($_POST['submit']) == "Submit") {

	if($_POST['title']==""){
		$_SESSION['msg_title'] = "Title is Empty";
	}
	if(empty($_POST['author'])){
		$_SESSION['msg_author'] = "Author is Empty";
	}
	if(empty($_POST['summary'])){
		$_SESSION['msg_summary'] = "Summary is Empty";
	}
	if(empty($_POST['price'])){
		$_SESSION['msg_price'] = "Price is Empty";
	}
	if($_POST['cat'] == "Open this select menu"){
		$_SESSION['msg_cat'] = "Category is Empty";
	}
	if(empty($_FILES["file"])){
		$_SESSION['msg_file'] = "file is Empty";
	}

	if($_POST['title']=="" || $_POST['author']=="" || $_POST['summary']=="" ||  $_POST['price']=="" || $_POST['cat']=="" || empty($_FILES["file"])){
		header('Location: ' . "http://localhost/bookStore/index.php?page=insertBook");
	}else{
		$tmp_name = $_FILES['file']['tmp_name'];
		
		$imgname = $_FILES['file']['name'];
		
		$title = $_POST['title'];	
		$author = $_POST['author'];	
		$summary = $_POST['summary'];	
		$price = $_POST['price'];	
		$category = $_POST['cat'];


		if( !move_uploaded_file($tmp_name, 'C:/xampp/htdocs/bookStore/images/'.$imgname)){
			$_SESSION['msg_file'] = "file is Empty";
			//header('Location: ' . "http://localhost/bookStore/index.php?page=insertBook");
		}

		$insertData1 = "'','$title','$author','$summary','$price','$category','$imgname'";
		$insertSQL1 = "INSERT INTO book VALUES($insertData1)";
		$insertQuery1 = @mysqli_query($dbCon,$insertSQL1) or die("Error in Table Info Insertion: ".mysqli_error($dbCon));

		if($insertQuery1 ){
			$_SESSION['msg_success'] = "<h3 style='color:green; text-align: center;'>Data Succefully Inserted</h3>";
		}else{
			$_SESSION['msg_success'] = "<h4 style='color:red'>Not Inserted</h4>";
		}
		header('Location: ' . "http://localhost/bookStore/index.php?page=insertBook");
	}
	
}

?>