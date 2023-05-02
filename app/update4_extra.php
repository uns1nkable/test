<?php
include ("db.php");
$id = $_POST['№_загона'];
$Shop = $_POST['№_цеха'];
$Worker = $_POST['ID_работника'];
$result = mysqli_query($db, "UPDATE загоны SET №_цеха = '$Shop', ID_работника = '$Worker' WHERE загоны . №_загона = '$id'");
header('Location: ./corral.php');