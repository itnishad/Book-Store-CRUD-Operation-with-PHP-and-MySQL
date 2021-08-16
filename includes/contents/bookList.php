
<?php 
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] . "/bookStore/includes/actions/show_action.php");
?>

<div class="container">

<?php 
				if(@$_SESSION['msg_update']!=""){
					echo $_SESSION['msg_update']; 
					$_SESSION['msg_update']="";
				}
			?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Athor</th>
      <th scope="col">Summary</th>
      <th scope="col">Price</th>  
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php 
    if($numData>0){
        $x=0;
        while($recShow = mysqli_fetch_object($qryShow)){
?>  

  <tbody>
    <tr>
      <th scope="row"><?php echo $recShow->id; ?></th>
      <td><?php echo $recShow->title; ?></td>
      <td><?php echo $recShow->author; ?></td>
      <td><?php echo $recShow->summary; ?></td>
      <td><?php echo $recShow->price; ?></td>
      <td><?php echo $recShow->category; ?></td>
      <td>
      <a href="index.php?page=updateBook&updtID=<?php echo $recShow->id;?>">Update</a> / 
      <a href="includes/actions/delete_action.php?dltID=<?php echo $recShow->id;?>">Delete</a>
    </tr>
  </tbody>

  <?php
        }
        
    }
?>
</table>

</div>