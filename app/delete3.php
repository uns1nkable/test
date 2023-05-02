<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM диеты WHERE диеты.ID_диеты = '$id'");
header('Location: ./diet.php');