<?php
include_once 'dbh.inc.php';

$price = $_POST['price'];

 $sql = "SELECT * FROM card WHERE price <= '$price';";
 $result = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_row($result)){
         print $row[1]; 
                print " "; 
                print $row[2];
                print " "; 
                print $row[6];
                print " ";        
                print $row[3];
                print " "; 
                print $row[7];
                print " "; 
                print $row[5] . "<br>";
                print " "; 
   }
?>