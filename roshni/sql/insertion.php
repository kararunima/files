<?php
    
    include("conn.php");


if(isset($_POST["submit"])){
    
         $name = $_POST["name"];
         $email = $_POST["email"];
         $password = $_POST["pass"];
    
    
    $insert= "INSERT INTO `registration`(`id`, `name`, `email`, `pass`) VALUES ('NULL', '$name','$email','$password')";
    
    
    $insert_query = mysqli_query($con,$insert);
    
     
    if($insert_query){
        
        
        echo"sucessfully inserted";
        
        
        
    }
      
      else{
          
          
          
          echo "mysqli_error($con)";
      }
      
      
}
    

?>