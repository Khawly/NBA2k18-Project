<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
$price = $_POST['price'];

$sql = "UPDATE card SET price = '$price' WHERE id = '$id';";
    mysqli_query($conn,$sql);
    header("Location: ../MyTeamFlip.php?addcard=success");
?>
