<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM работники WHERE работники.ID_работника = '$id'");
header('Location: ./worker.php');