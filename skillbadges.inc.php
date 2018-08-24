
<?php
include_once 'dbh.inc.php';


$name = $_POST['name'];
$level = $_POST['level'];
$theme = $_POST['theme'];
$overall = $_POST['overall'];

$sql1 = "SELECT * FROM skill_badges WHERE name = '$name' AND level = '$level' AND theme = '$theme' AND overall = '$overall';";
            $result2 = mysqli_query($conn,$sql1);
            echo"<table border =1> <tr><th>Badge</th><th>Level</th> </tr> ";
               while($row = mysqli_fetch_row($result2))
                {
                    echo "<tr>";
                    
                     echo "<td>Catch and Shoot</td>";
                     echo "<td>$row[5]</td>";
                      echo "</tr>";
                      
                      echo "<tr>";
                     echo "<td>Corner Specialist</td>";
                     echo "<td>$row[6]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Deep Range Deadeye</td>";
                     echo "<td>$row[7]</td>";
                     echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Difficult Shots</td>";
                     echo "<td>$row[8]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Limitless Range</td>";
                     echo "<td>$row[9]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Mid Range Deadeye</td>";
                     echo "<td>$row[10]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Pick and Popper</td>";
                     echo "<td>$row[11]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Tireless Scorer</td>";
                     echo "<td>$row[12]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Acrobat</td>";
                     echo "<td>$row[13]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Dream Like Up and Under</td>";
                     echo "<td>$row[14]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drop Stepper</td>";
                     echo "<td>$row[15]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Pick and Roller</td>";
                     echo "<td>$row[16]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Spin Technician</td>";
                     echo "<td>$row[17]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Put Back King</td>";
                     echo "<td>$row[18]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Relentless Finisher</td>";
                     echo "<td>$row[19]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Tear Dropper</td>";
                     echo "<td>$row[20]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Ankle Breaker</td>";
                     echo "<td>$row[21]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Break Starter</td>";
                     echo "<td>$row[22]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Dimer</td>";
                     echo "<td>$row[23]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Flashy Passer</td>";
                     echo "<td>$row[24]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                      echo "<td>Lob City Passer</td>";
                     echo "<td>$row[25]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Pick and Roll Maestro</td>";
                     echo "<td>$row[26]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Brick Wall</td>";
                     echo "<td>$row[27]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Bruiser</td>";
                     echo "<td>$row[28]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Lob City Finisher</td>";
                     echo "<td>$row[29]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>One Man Fast Break</td>";
                     echo "<td>$row[30]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Posterizer</td>";
                     echo "<td>$row[31]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Charge Card</td>";
                     echo "<td>$row[32]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Chase Down Artist</td>";
                     echo "<td>$row[33]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Defensive Stopper</td>";
                     echo "<td>$row[34]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Pick Dodger</td>";
                     echo "<td>$row[35]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Pick Pocket</td>";
                     echo "<td>$row[36]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Rim Protector</td>";
                     echo "<td>$row[37]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Hustle Rebounder</td>";
                     echo "<td>$row[38]</td>";
                      echo "</tr>";
                  
          
                    echo "</tr>\n";

                }
               echo" </table>";
  #  header("Location: ../MyTeamFlip.php?addcard=success");
?>

