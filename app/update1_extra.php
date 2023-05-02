<?php
include ("db.php");
$id = $_POST['ID_коровы'];
$Weight = $_POST['Вес'];
$Date = $_POST['Дата_рождения'];
$Breed = $_POST['ID_породы'];
$Milk = $_POST['Молока_ежедневно'];
$Corral = $_POST['№_загона'];
$Diet = $_POST['ID_диеты'];
$result = mysqli_query($db, "UPDATE коровы SET Вес = '$Weight', Дата_рождения = '$Date', ID_породы = '$Breed', Молока_ежедневно = '$Milk', №_загона = '$Corral', ID_диеты = '$Diet' WHERE коровы . ID_коровы = '$id'");
header('Location: ./cow.php');