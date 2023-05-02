<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM коровы WHERE коровы.ID_коровы = '$id'");
header('Location: ./cow.php');