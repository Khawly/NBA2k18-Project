<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
$name = $_POST['name'];
$level = $_POST['level'];
$theme = $_POST['theme'];
$overall = $_POST['overall'];
$outside_scoring = $_POST['outside_scoring'];
$open_shot_mid = $_POST['open_shot_mid'];
$contested_shot_mid = $_POST['contested_shot_mid'];
$off_dribble_shot_mid = $_POST['off_dribble_shot_mid'];
$open_shot_3pt = $_POST['open_shot_3pt'];
$contested_shot_3pt = $_POST['contested_shot_3pt'];
$off_dribble_shot_3pt = $_POST['off_dribble_shot_3pt'];
$shot_iq = $_POST['shot_iq'];
$free_throw = $_POST['free_throw'];
$off_consistency = $_POST['off_consistency'];
$inside_scoring = $_POST['inside_scoring'];
$shot_close = $_POST['shot_close'];
$standing_layup = $_POST['standing_layup'];
$driving_layup = $_POST['driving_layup'];
$standing_dunk = $_POST['standing_dunk'];
$driving_dunk = $_POST['driving_dunk'];
$contact_dunk = $_POST['contact_dunk'];
$draw_foul = $_POST['draw_foul'];
$post_control = $_POST['post_control'];
$post_hook = $_POST['post_hook'];
$post_fadeaway = $_POST['post_fadeaway'];
$hands = $_POST['hands'];
$playmaking = $_POST['playmaking'];
$ball_control = $_POST['ball_control'];
$passing_accuracy = $_POST['passing_accuracy'];
$passing_vision = $_POST['passing_vision'];
$passing_iq = $_POST['passing_iq'];
$speed_with_ball = $_POST['speed_with_ball'];
$athleticism = $_POST['athleticism'];
$speed = $_POST['speed'];
$acceleration = $_POST['acceleration'];
$vertical = $_POST['vertical'];
$strength = $_POST['strength'];
$stamina = $_POST['stamina'];
$hustle = $_POST['hustle'];
$overall_durability = $_POST['overall_durability'];
$defending = $_POST['defending'];
$on_ball_def_iq = $_POST['on_ball_def_iq'];
$low_post_def_iq = $_POST['low_post_def_iq'];
$pick_and_roll_def_iq = $_POST['pick_and_roll_def_iq'];
$help_def_iq = $_POST['help_def_iq'];
$lateral_quickness = $_POST['lateral_quickness'];
$pass_perception = $_POST['pass_perception'];
$reaction_time = $_POST['reaction_time'];
$steal = $_POST['steal'];
$block = $_POST['block'];
$shot_contest = $_POST['shot_contest'];
$def_consistency = $_POST['def_consistency'];
$rebounding = $_POST['rebounding'];
$offensive_rebounding = $_POST['offensive_rebounding'];
$defensive_rebounding = $_POST['defensive_rebounding'];
$boxout = $_POST['boxout'];
$potential = $_POST['potential'];
$intangibles = $_POST['intangibles'];
$total_attr = $_POST['total_attr'];


$sql4 = "INSERT INTO ratings VALUES ('$id','$name','$level','$theme','$overall',
    '$outside_scoring','$open_shot_mid','$contested_shot_mid','$off_dribble_shot_mid','$open_shot_3pt','$contested_shot_3pt',
    '$off_dribble_shot_3pt','$shot_iq','$free_throw','$off_consistency','$inside_scoring','$shot_close',
    '$standing_layup','$driving_layup','$standing_dunk','$driving_dunk','$contact_dunk','$draw_foul',
    '$post_control','$post_hook','$post_fadeaway','$hands','$playmaking','$ball_control',
    '$passing_accuracy','$passing_vision','$passing_iq','$speed_with_ball','$athleticism','$speed',
    '$acceleration','$vertical','$strength','$stamina','$hustle','$overall_durability',
    '$defending','$on_ball_def_iq','$low_post_def_iq','$pick_and_roll_def_iq','$help_def_iq','$lateral_quickness',
    '$pass_perception','$reaction_time','$steal','$block','$shot_contest','$def_consistency',
    '$rebounding','$offensive_rebounding','$defensive_rebounding','$boxout','$potential','$intangibles','$total_attr');";
  
    
 mysqli_query($conn,$sql4);
    header("Location: ../MyTeamFlip.php?addratings=success");
?>