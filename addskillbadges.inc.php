<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
$name = $_POST['name'];
$level = $_POST['level'];
$theme = $_POST['theme'];
$overall = $_POST['overall'];
$catch_and_shoot = $_POST['catch_and_shoot'];
$corner_specialist = $_POST['corner_specialist'];
$deep_range_deadeye = $_POST['deep_range_deadeye'];
$difficult_shots = $_POST['difficult_shots'];
$limitless_range = $_POST['limitless_range'];
$mid_range_deadeye = $_POST['mid_range_deadeye'];
$pick_and_popper = $_POST['pick_and_popper'];
$tireless_scorer = $_POST['tireless_scorer'];
$acrobat = $_POST['acrobat'];
$dream_like_up_and_under = $_POST['dream_like_up_and_under'];
$drop_stepper = $_POST['drop_stepper'];
$pick_and_roller = $_POST['pick_and_roller'];
$post_spin_technician = $_POST['post_spin_technician'];
$put_back_king = $_POST['put_back_king'];
$relentless_finisher = $_POST['relentless_finisher'];
$tear_dropper = $_POST['tear_dropper'];
$ankle_breaker = $_POST['ankle_breaker'];
$break_starter = $_POST['break_starter'];
$dimer = $_POST['dimer'];
$flashy_passer = $_POST['flashy_passer'];
$lob_city_passer = $_POST['lob_city_passer'];
$pick_and_roll_maestro = $_POST['pick_and_roll_maestro'];
$brick_wall = $_POST['brick_wall'];
$bruiser = $_POST['bruiser'];
$lob_city_finisher = $_POST['lob_city_finisher'];
$one_man_fast_break = $_POST['one_man_fast_break'];
$posterizer = $_POST['posterizer'];
$charge_card = $_POST['charge_card'];
$chase_down_artist = $_POST['chase_down_artist'];
$defensive_stopper = $_POST['defensive_stopper'];
$pick_dodger = $_POST['pick_dodger'];
$pick_pocket = $_POST['pick_pocket'];
$rim_protector = $_POST['rim_protector'];
$hustle_rebounder = $_POST['hustle_rebounder'];


    $sql2 = "INSERT INTO skill_badges VALUES ('$id','$name','$level','$theme','$overall','$catch_and_shoot','$corner_specialist','$difficult_shots', '$deep_range_deadeye',"
            . "'$limitless_range','$mid_range_deadeye','$pick_and_popper','$tireless_scorer','$acrobat','$dream_like_up_and_under','$drop_stepper','$pick_and_roller','$post_spin_technician',"
            . "'$put_back_king','$relentless_finisher','$tear_dropper','$ankle_breaker','$break_starter','$dimer','$flashy_passer',"
            . "'$lob_city_passer','$pick_and_roll_maestro','$brick_wall','$bruiser','$lob_city_finisher','$one_man_fast_break',"
            . "'$posterizer','$charge_card','$chase_down_artist','$defensive_stopper','$pick_dodger','$pick_pocket','$rim_protector','$hustle_rebounder');";
    mysqli_query($conn,$sql2);
    header("Location: ../MyTeamFlip.php?addskillbadges=success");
?>
