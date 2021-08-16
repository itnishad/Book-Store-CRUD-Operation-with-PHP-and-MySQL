<?php 

    //echo $_SERVER["DOCUMENT_ROOT"]
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bookStore/includes/actions/show_action.php");

    
?>



<section class="box">
        <div class="width">
            <h1><span class="red-color">Some good Books..!!</span> </h1>
            <h1> You Should Buy good books and read </h1>
            <p>One of the oldest forms of knowledge providers are 
                books; therefore, they are also called the powerhouse
                 of knowledge and information. Books provide us information without asking for 
                anything in return, and often it is considered as the best
                 company a human can have.</p><br><br><br>
           
        </div>
        <div class=" width">
            <img src="images/Morder psyc.png" width=80%>
        </div>

    </section>
    <section class="box1">

        <div class="width">
            <img src="images/book2.jpg" alt="">
        </div>
        <div class="width">
            <h1>ABOUT THIS:-</h1>
            <P> A Book store requires maintaining a database of new books and the books
                 that are borrowed by users along with their due dates.
                 This system completely automates all your store's activities.</P><br><br><br>
            
        </div>

    </section>

<section class="product-area">

<?php 
    if($numData>0){
        while($recShow = mysqli_fetch_object($qryShow)){
?>      
        <div class="product-area1">
            <img class="img" src="images/<?php echo $recShow->imgname; ?>" height="100%" width="100%"><br><br>
             <h ><a  style="text-decoration: none;  font-size: 20px;" href="index.php?page=singleBook&updtID=<?php echo $recShow->id;?>"><?php echo $recShow->title; ?></a></h2>
            <h4 ><?php echo $recShow->summary; ?></h4>
            <h4 style="color: #e15f41"><?php echo $recShow->price; ?>$</h4>
        </div>
<?php
        }
        
    }
?>
        
</section><br><br><br><br><br>


<section class="extra-work">

        <div class="text-align">
            <big class="big"> 900K</big>
            <p>Youtube Subscribers</p>
        </div>

        <div class="text-align">
            <big class="big">2.4m</big>
            <p>Instagram Followers</p>
        </div>
        <div class="text-align">
            <big class="big">100K</big>
            <p>Dribble Shot Likes</p>
        </div>
    </section><br><br><br><br><br>