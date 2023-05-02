<?php
include ("db.php");
$id = $_POST['ID_диеты'];
$Type = $_POST['Тип_корма'];
$Mass = $_POST['Масса_корма_в_день'];
$Rate = $_POST['Частота_кормления'];
$result = mysqli_query($db, "UPDATE диеты SET Тип_корма = '$Type', Масса_корма_в_день = '$Mass', Частота_кормления = '$Rate' WHERE диеты . ID_диеты = '$id'");
header('Location: ./diet.php');