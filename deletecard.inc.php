
<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];

  $sql6 = "DELETE FROM card WHERE (card.id = '$id');";
    mysqli_query($conn,$sql6);
header("Location: ../MyTeamFlip.php?deletecard=success");
?>