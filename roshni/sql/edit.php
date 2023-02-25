<?php

include("conn.php");

$id=$_GET['editid'];

echo $id;

$select=mysqli_query($con,"select * from registration where id='$id'");


while($row=mysqli_fetch_array($select)) {
    
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $pass=$row['pass'];
    
}
?>


<html>
<head>
    <title>WE KNOW</title>
<body>

    <form action="edit1.php?editid=<?php echo $id ?>" method="post">
    
<p><label>name:</label><input type="text" name="name" placeholder="name" value="<?php echo $name ?>"></p>    
    
<p><label>email:</label><input type="email" name="email" placeholder="email" value="<?php echo $email ?>"></p>  
        
<p><label>pass:</label><input type="text" name="pass" placeholder="pass" value="<?php echo $pass?>"></p>
<p><input type="submit" name="submit" name="submit" value="register"></p>        
            
            
    
    </form>
    
</body>        
</head>
</html>