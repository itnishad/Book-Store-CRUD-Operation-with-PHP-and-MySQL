

<?php  
session_start();
require_once( $_SERVER["DOCUMENT_ROOT"] . "/bookStore/includes/actions/con_db.php");
$updtID=$_GET['updtID']; 
$sqlUpdtShow = "SELECT * FROM book WHERE id='$updtID'";
$qryUpdtShow = mysqli_query($dbCon,$sqlUpdtShow);
$recUpdtShow = mysqli_fetch_object($qryUpdtShow);
?>


<h3 style="text-align: center;">Update Form</h3>


<?php 
				/*if(@$_SESSION['msg_success']!=""){
					echo $_SESSION['msg_success']; 
					$_SESSION['msg_success']="";
				}*/
			?>


<div class="container" >
  <form action="includes/actions/update_action.php" method = "POST">

			<input type="hidden" name="ID" value="<?php echo $updtID; ?>">      

    <label for="fname">TITLE</label>
    <input type="text" name="title" value="<?php echo $recUpdtShow->title; ?>">
    <span style="color:red;" ><?php if(@$_SESSION['msg_title']!=""){echo $_SESSION['msg_title']; $_SESSION['msg_title']="";} ?> <br></span>

    <label for="lname">AUTHOR</label>
    <input type="text" id="lname" name="author"  value="<?php echo $recUpdtShow->author; ?>">
    <span style="color:red;" ><?php if(@$_SESSION['msg_author']!=""){echo $_SESSION['msg_author']; $_SESSION['msg_author']="";} ?> <br></span>

    <label for="lname">Summary</label>
    <input type="text" name="summary"   value="<?php echo $recUpdtShow->summary; ?>">
    <span style="color:red;" ><?php if(@$_SESSION['msg_summary']!=""){echo $_SESSION['msg_summary']; $_SESSION['msg_summary']="";} ?> <br></span>

    <label for="exampleFormControlInput1" class="form-label">PRICE</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="price"  value="<?php echo $recUpdtShow->price; ?>">
    <span style="color:red;" ><?php if(@$_SESSION['msg_price']!=""){echo $_SESSION['msg_price']; $_SESSION['msg_price']="";} ?> <br></span>


    <select class="form-select form-select-sm" name="cat" aria-label=".form-select-sm example">
      <option selected>Open this select menu</option>
      <option <?php if($recUpdtShow->category=="cse"){echo "selected";}?> value="cse">CSE</option>
      <option <?php if($recUpdtShow->category=="civil"){echo "selected";}?> value="civil">CIVIL</option>
      <option <?php if($recUpdtShow->category=="eee"){echo "selected";}?>  value="eee">EEE</option>
    </select>
    <span style="color:red;" ><?php if(@$_SESSION['msg_cat']!=""){echo $_SESSION['msg_cat']; $_SESSION['msg_cat']="";} ?> <br></span>
   
    <input type="submit" name="btnUpdt" value="Update">
  </form>
</div>