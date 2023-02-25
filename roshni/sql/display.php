<?php

include("conn.php");

$display=mysqli_query($con,"SELECT * FROM `registration`");


echo"<table>
<tr>
<th> id </th>
<th> name </th>
<th> email </th>
<th> pass </th>
</tr>";



while ($row = mysqli_fetch_array($display)){
    
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $pass = $row['pass'];
    
    echo "<tr>
    
    <td>$id</td>
    <td>$name &nbsp &nbsp &nbsp</td>
    <td>$email</td>
    <td>$pass</td>
    <td><a href='edit.php?editid=$id'> <button>EDIT</button></a></td>
    <td><a href='delete.php?deleteid=$id'> <button >Delete</button></a></td>
    </tr>";
      
}

echo "</table>"
    
    
?>
