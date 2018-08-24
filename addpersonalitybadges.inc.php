<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
$name = $_POST['name'];
$level = $_POST['level'];
$theme = $_POST['theme'];
$overall = $_POST['overall'];
$all_time_great = $_POST['all_time_great'];
$alpha_dog = $_POST['alpha_dog'];
$championship_dna = $_POST['championship_dna'];
$clutch_performer = $_POST['clutch_performer'];
$defensive_anchor = $_POST['defensive_anchor'];
$enforcer = $_POST['enforcer'];
$expressive = $_POST['expressive'];
$floor_general = $_POST['floor_general'];
$friendly = $_POST['friendly'];
$hardened = $_POST['hardened'];
$high_work_ethic = $_POST['high_work_ethic'];
$keeping_it_real = $_POST['keeping_it_real'];
$laid_back = $_POST['laid_back'];
$legendary_work_ethic = $_POST['legendary_work_ethic'];
$low_ego = $_POST['low_ego'];
$microwave = $_POST['microwave'];
$pat_my_back = $_POST['pat_my_back'];
$reserved = $_POST['reserved'];
$spark_plug = $_POST['spark_plug'];
$unpredictable = $_POST['unpredictable'];

$sql3 = "INSERT INTO personality_badges VALUES ('$id','$name','$level','$theme','$overall',
    '$all_time_great','$alpha_dog','$championship_dna','$clutch_performer','$defensive_anchor','$enforcer','$expressive',
    '$floor_general','$friendly','$hardened','$high_work_ethic','$keeping_it_real','$laid_back','$legendary_work_ethic',
    '$low_ego','$microwave','$pat_my_back','$reserved','$spark_plug','$unpredictable');";

 mysqli_query($conn,$sql3);
    header("Location: ../MyTeamFlip.php?addpersonalitybadges=success");
?>