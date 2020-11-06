<?php

include "php/db.php";


     $id=   $_GET['did'];
    $sqld= "DELETE FROM products WHERE id=$id";
    $query= mysqli_query($con,$sqld);
    if($query){
        header("location:as4d.php");
    }
    



















?>