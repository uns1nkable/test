<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM загоны WHERE загоны.№_загона = '$id'");
header('Location: ./corral.php');