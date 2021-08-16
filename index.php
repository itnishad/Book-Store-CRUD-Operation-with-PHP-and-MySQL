<?php
  /*Menu Dynamic Part*/
  @$pg = $_GET['page'];
  /*Design Part*/
  require_once("includes/layouts/header.php");
  require_once("includes/layouts/nav.php");

  // This part is Dynamic by Navigation
  if($pg=="")
    require_once("includes/contents/home.php"); 
  else if($pg=="aboutUs")
     require_once("includes/contents/about_us.php");
  else if($pg=="insertBook")
    require_once("includes/contents/insertBook.php");
  else if($pg=="bookList")
    require_once("includes/contents/bookList.php");
  else if($pg=="updateBook")
    require_once("includes/contents/update_form.php");
  else if($pg=="singleBook")
    require_once("includes/contents/singleBook.php");
  else if($pg=="links")
    require_once("includes/contents/links.php");


  require_once("includes/layouts/footer.php");
?>