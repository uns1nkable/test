<?php
include ("db.php");
$id = $_POST['ID_породы'];
$Name = $_POST['Название'];
$Power = $_POST['Средняя_производительность'];
$Weight = $_POST['Средний_вес'];
$result = mysqli_query($db, "UPDATE порода SET Название = '$Name', Средняя_производительность = '$Power', Средний_вес = '$Weight' WHERE порода . ID_породы = '$id'");
header('Location: ./breed.php');