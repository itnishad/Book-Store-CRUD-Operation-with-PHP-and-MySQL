<?php

require_once ("con_db.php");
$sqlShow = "SELECT * FROM book order by id DESC";
$qryShow = mysqli_query($dbCon,$sqlShow);
$numData = mysqli_num_rows($qryShow);






/*++Search++++*/
/*if(isset($_POST['btnSrch'])=="Search"){
	$srchID = $_POST['srchID'];
	$sqlSrch = "SELECT * FROM tbl_user WHERE card_ID='$srchID'";
	$qrySrch = mysqli_query($dbCon,$sqlSrch);
	$numSrch = mysqli_num_rows($qrySrch);
	$recSrch = mysqli_fetch_object($qrySrch);
}*/
?>