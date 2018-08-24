<?php
    include_once 'includes/dbh.inc.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flipper</title>
    </head>
    <h1>NBA2k18 MyTeam Prices</h1>
    <body>
        <a href="addcard.php">Add Card</a><br>
         <a href="addskillbadges.php">Add Skill Badges</a><br>
         <a href="addpersonalitybadges.php">Add Personality Badges</a><br>
          <a href="addratings.php">Add Ratings</a><br>
          <a href="addtendencies.php">Add Tendencies</a><br>
          <a href="updatecard.php">Update Price</a><br>
           <a href="searchcard.php">Search Card</a><br>
           <a href="searchbyprice.php">Search Price</a><br>
           <a href="deletecard.php">Delete Card</a><br>
          
    
        <?php
            $sql = "SELECT * FROM card;";
            $result = mysqli_query($conn,$sql);
            
            echo"<table border =1> <tr><th>Name</th><th>LVL</th><th>OVR</th><th>Theme</th><th>Team</th><th>Price</th></tr> ";
            
            while($row = mysqli_fetch_row($result)){
                  echo "<tr>";
                  echo "<td>$row[1]</td>";
                
                  echo "<td>$row[2]</td>";
                
                  echo "<td>$row[6]</td>";
           
                  echo "<td>$row[3]</td>";
              
                  echo "<td>$row[7]</td>";
             
                  echo "<td>$row[5]</td>";
                  echo "</tr>";
             /*   print $row['name']; 
                print " "; 
                print $row['level'];
                print " "; 
                print $row['overall'];
                print " ";        
                print $row['theme'];
                print " "; 
                print $row['team'];
                print " "; 
                print $row['price'] . "<br>";
                print " "; */
                  
            }
             echo" </table>";
            ?>
    </body>
</html>