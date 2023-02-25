<?php


include("conn.php");


if(isset($_POST["submit"])){
    
    $id=$_GET['editid'];
  $name=$_POST["name"];   
  $email=$_POST["email"];   
$pass=$_POST["pass"];  
    
   
$update_query=mysqli_query($con,"UPDATE `registration` SET name= '$name', email = '$email', pass = '$pass' where id=$id");


if($update_query){
    
    
    echo header("location:display.php");
    
}
    
    else{
        
     echo"something went wrong";
        
        
        
        
        
    }
    
    
}




?>



