<?php
include_once 'dbh.inc.php';


$name = $_POST['name'];
$level = $_POST['level'];
$theme = $_POST['theme'];
$overall = $_POST['overall'];

    $sql = "SELECT * FROM card WHERE name = '$name' AND level = '$level' AND theme = '$theme' AND overall = '$overall';";
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
            }
             echo" </table>";
            
            $sql1 = "SELECT * FROM skill_badges WHERE name = '$name' AND level = '$level' AND theme = '$theme' AND overall = '$overall';";
            $result2 = mysqli_query($conn,$sql1);
            echo"<table border =1> <tr><th>Skill Badge</th><th>Level</th> </tr> ";
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
               
                $sql2 = "SELECT * FROM personality_badges WHERE name = '$name' AND level = '$level' AND theme = '$theme' AND overall = '$overall';";
            $result3 = mysqli_query($conn,$sql2);
               echo "<table border =1> <tr><th>Personality Badge</th><th>Owns</th> </tr> ";
             while($row = mysqli_fetch_row($result3))
                 {
             echo "<tr>";
                    
                     echo "<td>All Time Great</td>";
                     echo "<td>$row[5]</td>";
                      echo "</tr>";
                      
                      echo "<tr>";
                     echo "<td>Alpha Dog</td>";
                     echo "<td>$row[6]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Championship DNA</td>";
                     echo "<td>$row[7]</td>";
                     echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Clutch Performer</td>";
                     echo "<td>$row[8]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Defensive Anchor</td>";
                     echo "<td>$row[9]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Enforcer</td>";
                     echo "<td>$row[10]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Expressive</td>";
                     echo "<td>$row[11]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Floor General</td>";
                     echo "<td>$row[12]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Friendly</td>";
                     echo "<td>$row[13]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Hardened</td>";
                     echo "<td>$row[14]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>High Work Ethic</td>";
                     echo "<td>$row[15]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Keeping it Real</td>";
                     echo "<td>$row[16]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Laid Back</td>";
                     echo "<td>$row[17]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Legendary Work Ethic</td>";
                     echo "<td>$row[18]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Low Ego</td>";
                     echo "<td>$row[19]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Microwave</td>";
                     echo "<td>$row[20]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Pat My Back</td>";
                     echo "<td>$row[21]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Reserved</td>";
                     echo "<td>$row[22]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Spark Plug</td>";
                     echo "<td>$row[23]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Unpredictable</td>";
                     echo "<td>$row[24]</td>";
                       echo "</tr>";
          
                    echo "</tr>\n";

                }
               echo" </table>";
               
                $sql3 = "SELECT * FROM ratings WHERE name = '$name' AND level = '$level' AND theme = '$theme' AND overall = '$overall';";
            $result4 = mysqli_query($conn,$sql3);
            echo"<table border =1> <tr><th>Rating</th><th>Value</th> </tr> ";
               while($row = mysqli_fetch_row($result4))
                {
        echo "<tr>";
                    
                     echo "<td>Outside Scoring</td>";
                     echo "<td>$row[5]</td>";
                      echo "</tr>";
                      
                      echo "<tr>";
                     echo "<td>Open Shot Mid</td>";
                     echo "<td>$row[6]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Contested Shot Mid</td>";
                     echo "<td>$row[7]</td>";
                     echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Off Dribble Shot Mid</td>";
                     echo "<td>$row[8]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Open Shot 3pt</td>";
                     echo "<td>$row[9]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Contested Shot 3pt</td>";
                     echo "<td>$row[10]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Off Dribble Shot 3pt</td>";
                     echo "<td>$row[11]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Shot IQ</td>";
                     echo "<td>$row[12]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Free Throw</td>";
                     echo "<td>$row[13]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Off Consistency</td>";
                     echo "<td>$row[14]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Inside Scoring</td>";
                     echo "<td>$row[15]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Shot Close</td>";
                     echo "<td>$row[16]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Standing Layup</td>";
                     echo "<td>$row[17]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Driving Layup</td>";
                     echo "<td>$row[18]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Standing Dunk</td>";
                     echo "<td>$row[19]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Driving Dunk</td>";
                     echo "<td>$row[20]</td>";
                       echo "</tr>";
                       
                        echo "<tr>";
                     echo "<td>Contact Dunk</td>";
                     echo "<td>$row[21]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Draw Foul</td>";
                     echo "<td>$row[22]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Post Control</td>";
                     echo "<td>$row[23]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Hook</td>";
                     echo "<td>$row[24]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Fadeaway</td>";
                     echo "<td>$row[25]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                      echo "<td>Hands</td>";
                     echo "<td>$row[26]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Playmaking</td>";
                     echo "<td>$row[27]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Ball Control</td>";
                     echo "<td>$row[28]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Passing Accuracy</td>";
                     echo "<td>$row[29]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Passing Vision</td>";
                     echo "<td>$row[30]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Passing IQ</td>";
                     echo "<td>$row[31]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Speed With Ball</td>";
                     echo "<td>$row[32]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Athleticism</td>";
                     echo "<td>$row[33]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Speed</td>";
                     echo "<td>$row[34]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Acceleration</td>";
                     echo "<td>$row[35]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Vertical</td>";
                     echo "<td>$row[36]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Strength</td>";
                     echo "<td>$row[37]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Stamina</td>";
                     echo "<td>$row[38]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Hustle</td>";
                     echo "<td>$row[39]</td>";
                      echo "</tr>";
                      
                       echo "<td>Overall Durability</td>";
                     echo "<td>$row[40]</td>";
                      echo "</tr>";
                      
                      echo "<tr>";
                     echo "<td>Defending</td>";
                     echo "<td>$row[41]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>On Ball Def IQ</td>";
                     echo "<td>$row[42]</td>";
                     echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Low Post Def IQ</td>";
                     echo "<td>$row[43]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Pick and Roll Def IQ</td>";
                     echo "<td>$row[44]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Help Def IQ</td>";
                     echo "<td>$row[45]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Lateral Quickness</td>";
                     echo "<td>$row[46]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Pass Perception</td>";
                     echo "<td>$row[47]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Reaction Time</td>";
                     echo "<td>$row[48]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Steal</td>";
                     echo "<td>$row[49]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Block</td>";
                     echo "<td>$row[50]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Shot Contest</td>";
                     echo "<td>$row[51]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Def Consistency</td>";
                     echo "<td>$row[52]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Rebounding</td>";
                     echo "<td>$row[53]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Offensive Rebounding</td>";
                     echo "<td>$row[54]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Defensive Rebounding</td>";
                     echo "<td>$row[55]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Boxout</td>";
                     echo "<td>$row[56]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Potential</td>";
                     echo "<td>$row[57]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Intangibles</td>";
                     echo "<td>$row[58]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Total Attributes</td>";
                     echo "<td>$row[59]</td>";
                       echo "</tr>";
                  
          
                    echo "</tr>\n";

                }
               echo" </table>";
               
                 $sql4 = "SELECT * FROM tendencies WHERE name = '$name' AND level = '$level' AND theme = '$theme' AND overall = '$overall';";
            $result5 = mysqli_query($conn,$sql4);
            echo"<table border =1> <tr><th>Tendency</th><th>Value</th> </tr> ";
               while($row = mysqli_fetch_row($result5))
                {
        echo "<tr>";
                    
                     echo "<td>Standing Layup</td>";
                     echo "<td>$row[5]</td>";
                      echo "</tr>";
                      
                      echo "<tr>";
                     echo "<td>Driving Layup</td>";
                     echo "<td>$row[6]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Hop Step Layup</td>";
                     echo "<td>$row[7]</td>";
                     echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Euro Step Layup</td>";
                     echo "<td>$row[8]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Floater</td>";
                     echo "<td>$row[9]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Use Glass</td>";
                     echo "<td>$row[10]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Shoot</td>";
                     echo "<td>$row[11]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Shot Close</td>";
                     echo "<td>$row[12]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Shot Mid</td>";
                     echo "<td>$row[13]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Shot Three</td>";
                     echo "<td>$row[14]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Contested Jumper Mid</td>";
                     echo "<td>$row[15]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Contested Jumper Three</td>";
                     echo "<td>$row[16]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Stepback Jumper Mid</td>";
                     echo "<td>$row[17]</td>";
                       echo "</tr>";
                       
                        echo "<tr>";
                     echo "<td>Stepback Jumper Three</td>";
                     echo "<td>$row[18]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Spin Jumper</td>";
                     echo "<td>$row[19]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Step Through Shot</td>";
                     echo "<td>$row[20]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Under Basket Shot</td>";
                     echo "<td>$row[21]</td>";
                       echo "</tr>";
                       
                        echo "<tr>";
                     echo "<td>Pull up in Transition</td>";
                     echo "<td>$row[21]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Triple Threat Pump</td>";
                     echo "<td>$row[23]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Triple Threat Jab</td>";
                     echo "<td>$row[24]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Triple Threat Idle</td>";
                     echo "<td>$row[25]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Triple Threat Shoot</td>";
                     echo "<td>$row[26]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                      echo "<td>Setup Sizeup</td>";
                     echo "<td>$row[27]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Setup Hesitation</td>";
                     echo "<td>$row[28]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive</td>";
                     echo "<td>$row[29]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive Right vs Left</td>";
                     echo "<td>$row[30]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive Crossover</td>";
                     echo "<td>$row[31]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive Spin</td>";
                     echo "<td>$row[32]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive Stepback</td>";
                     echo "<td>$row[33]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive Half Spin</td>";
                     echo "<td>$row[34]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive Double Cross</td>";
                     echo "<td>$row[35]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive Behind Back</td>";
                     echo "<td>$row[36]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive Hesitation</td>";
                     echo "<td>$row[37]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Drive In and Out</td>";
                     echo "<td>$row[38]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>No Dribble Move</td>";
                     echo "<td>$row[39]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Attack Strong</td>";
                     echo "<td>$row[40]</td>";
                      echo "</tr>";
                      
                       echo "<td>Dish to Open Man</td>";
                     echo "<td>$row[41]</td>";
                      echo "</tr>";
                      
                      echo "<tr>";
                     echo "<td>Standing Dunk</td>";
                     echo "<td>$row[42]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Driving Dunk</td>";
                     echo "<td>$row[43]</td>";
                     echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Driving Dunk</td>";
                     echo "<td>$row[44]</td>";
                     echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Alley Oop</td>";
                     echo "<td>$row[45]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Putback Dunk</td>";
                     echo "<td>$row[46]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Crash</td>";
                     echo "<td>$row[47]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Flashy Pass</td>";
                     echo "<td>$row[48]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Alley Oop Pass</td>";
                     echo "<td>$row[49]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Up</td>";
                     echo "<td>$row[50]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Back Down</td>";
                     echo "<td>$row[51]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Aggressive Back Down</td>";
                     echo "<td>$row[52]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Face Up</td>";
                     echo "<td>$row[53]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Spin</td>";
                     echo "<td>$row[54]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Drive</td>";
                     echo "<td>$row[55]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Drop Step</td>";
                     echo "<td>$row[56]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Hop Step</td>";
                     echo "<td>$row[57]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Roll vs Pop</td>";
                     echo "<td>$row[58]</td>";
                       echo "</tr>";
                     
                     
                      echo "<tr>";
                     echo "<td>Shoot from Post</td>";
                     echo "<td>$row[59]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Hook Left</td>";
                     echo "<td>$row[60]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Hook Right</td>";
                     echo "<td>$row[61]</td>";
                       echo "</tr>";
                  
          
                    echo "<tr>";
                     echo "<td>Post Fade Left</td>";
                     echo "<td>$row[62]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Fade Right</td>";
                     echo "<td>$row[63]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Shimmy Shot</td>";
                     echo "<td>$row[64]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Hop Shot</td>";
                     echo "<td>$row[65]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Stepback Shot</td>";
                     echo "<td>$row[66]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Post Up and Under</td>";
                     echo "<td>$row[67]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>On Ball Steal</td>";
                     echo "<td>$row[68]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Pass Interception</td>";
                     echo "<td>$row[69]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Contest Shot</td>";
                     echo "<td>$row[70]</td>";
                       echo "</tr>";
                     
                      echo "<tr>";
                     echo "<td>Block Shot</td>";
                     echo "<td>$row[71]</td>";
                      echo "</tr>";
                      
                       echo "<td>Take Charge</td>";
                     echo "<td>$row[72]</td>";
                      echo "</tr>";
                      
                      echo "<tr>";
                     echo "<td>Foul</td>";
                     echo "<td>$row[73]</td>";
                       echo "</tr>";
                       
                      echo "<tr>";
                     echo "<td>Hard Foul</td>";
                     echo "<td>$row[74]</td>";
                     echo "</tr>";
                     
                     
                    echo "</tr>\n";

                }
               echo" </table>";
  #  header("Location: ../MyTeamFlip.php?addcard=success");
?>


                     
                    