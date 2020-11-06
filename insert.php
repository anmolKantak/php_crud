<?php
  include "php/db.php";

    $prod_name = $prod_img = $prod_price = $prod_cat = "";

  if($_SERVER['REQUEST_METHOD']=="POST"){
      if(isset($_POST['createp'])){
      $prod_name = $_POST['firstname'];
       $prod_img=$_POST["uploadFile"];
       $prod_price=$_POST["price"];
       $prod_cat=$_POST["category"];


       $sql = "INSERT INTO products (prod_name , prod_img , prod_price , prod_cat)  
                    VALUES('$prod_name','$prod_img','$prod_price','$prod_cat')";
        if(mysqli_query($con,$sql)){
            header("location: as4d.php");
        }else{
            echo "error";
        }
      }
  }









?>