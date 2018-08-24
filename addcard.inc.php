
<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
$name = $_POST['name'];
$level = $_POST['level'];
$theme = $_POST['theme'];
$position = $_POST['position'];
$price = $_POST['price'];
$overall = $_POST['overall'];
$team = $_POST['team'];
$height = $_POST['height'];

    $sql1 = "INSERT INTO card VALUES ('$id','$name','$level','$theme','$position','$price','$overall','$team','$height');";
    mysqli_query($conn,$sql1);
    header("Location: ../MyTeamFlip.php?addcard=success");
?>
