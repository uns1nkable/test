<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM порода WHERE порода.ID_породы = '$id'");
header('Location: ./breed.php');