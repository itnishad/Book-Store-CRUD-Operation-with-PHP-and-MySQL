
<?php  
session_start();
require_once( $_SERVER["DOCUMENT_ROOT"] . "/bookStore/includes/actions/con_db.php");
$updtID=$_GET['updtID']; 
$sqlUpdtShow = "SELECT * FROM book WHERE id='$updtID'";
$qryUpdtShow = mysqli_query($dbCon,$sqlUpdtShow);
$recUpdtShow = mysqli_fetch_object($qryUpdtShow);

$sqlSug = "SELECT * FROM book WHERE category='$recUpdtShow->category'";
$qrySug = mysqli_query($dbCon,$sqlSug);
$numData = mysqli_num_rows($qrySug);

?>

<div class="main" style="padding:15px;width:90%;height:550px;">

    
    <section class="box1" style = "background-color:white;float: left;width: 750px;height: 450px;margin-left: 5%;margin-bottom: 20px;
    border: 2px solid black;border-radius: 10px;padding: 20px;box-shadow: 10px 10px 20px gray;">

        <div style="height:800px;weight:600px;" >
            <img style="margin-left:20px;" class="width" style="" src="images/<?php echo $recUpdtShow->imgname; ?>" alt="">
        </div>
        <div class="width" style="width:50%px;height: 400px;float: left;margin-right: 50px;padding: 10px;">
            <P class="info" style="text-align: right;">
            <h1>Books Title</h1>
            <h2 style=" text-align: left; color:green; "><?php echo $recUpdtShow->title; ?></h2>
            <h3>Authros</h3>
            <h4 style="color:blue"><?php echo $recUpdtShow->author; ?></h4>
            <h3 style="color: #ffb142">Price: <?php echo $recUpdtShow->price; ?>$</h3>
            <br>
            <a class="link-button" 
            style="text-decoration: none;
                background-image: linear-gradient(50deg,lightsalmon,tomato) ;
                padding: 10px 20px;
                border-radius: 10px;
                color:white;
                front-weight: 700;" 
            target="_blank"href=""> Buy now</a>
            </P>
        </div>
      
    </section>
<?php
    if($numData>0){
        $x=0;
    while($dat = mysqli_fetch_object($qrySug)){
        
        if($x==2)
            break;     
?>

    <div class="product-area2" style="background-color:white;float: right;width: 200px;height:40%;margin-right: 5%;margin-bottom: 20px;
        border-radius: 10px;padding: 20px;box-shadow: 10px 10px 10px 10px gray;">
        <img class="img" src="images/<?php echo $dat->imgname; ?>" height="70%" width="80%"><br><br>
         <h2><a style="text-decoration:none;font-size:15px;" href=""><?php echo $dat->title; ?></a></h2>
    </div>
<?php
    $x++;
    }
    }
?>
    
</div>
