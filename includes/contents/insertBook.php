<?php session_start(); ?>


<h3 style="text-align: center;">INPUT INFORMATION</h3>


<?php 
				if(@$_SESSION['msg_success']!=""){
					echo $_SESSION['msg_success']; 
					$_SESSION['msg_success']="";
				}
			?>


<div class="container" >
  <form action="includes/actions/insert_action.php" method = "POST" enctype="multipart/form-data">
    <label for="fname">TITLE</label>
    <input type="text" name="title" placeholder="Name of the books..">
    <span style="color:red;" ><?php if(@$_SESSION['msg_title']!=""){echo $_SESSION['msg_title']; $_SESSION['msg_title']="";} ?> <br></span>

    <label for="lname">AUTHOR</label>
    <input type="text" id="lname" name="author" placeholder="Rothfuss...">
    <span style="color:red;" ><?php if(@$_SESSION['msg_author']!=""){echo $_SESSION['msg_author']; $_SESSION['msg_author']="";} ?> <br></span>

    <label for="lname">Summary</label>
    <input type="text" name="summary"  placeholder="Summary...">
    <span style="color:red;" ><?php if(@$_SESSION['msg_summary']!=""){echo $_SESSION['msg_summary']; $_SESSION['msg_summary']="";} ?> <br></span>

    <label for="exampleFormControlInput1" class="form-label">PRICE</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="price" placeholder="Price">
    <span style="color:red;" ><?php if(@$_SESSION['msg_price']!=""){echo $_SESSION['msg_price']; $_SESSION['msg_price']="";} ?> <br></span>


    <select class="form-select form-select-sm" name="cat" aria-label=".form-select-sm example">
      <option selected>Open this select menu</option>
      <option value="cse">CSE</option>
      <option value="civil">CIVIL</option>
      <option  value="eee">EEE</option>
    </select>
    <span style="color:red;" ><?php if(@$_SESSION['msg_cat']!=""){echo $_SESSION['msg_cat']; $_SESSION['msg_cat']="";} ?> <br></span>


    <div class="mb-3">
      <label for="formFile" class="form-label">Image</label>
      <input class="form-control" type="file" id="formFile" name="file">
   </div>
   <span style="color:red;" ><?php if(@$_SESSION['msg_file']!=""){echo $_SESSION['msg_file']; $_SESSION['msg_file']="";} ?> <br></span>
   
    <input type="submit" name="submit" value="Submit">
  </form>
</div>