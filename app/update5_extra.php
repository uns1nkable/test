<?php
include ("db.php");
$id = $_POST['ID_работника'];
$Name = $_POST['ФИО'];
$Birthday = $_POST['Дата_рождения'];
$Passport = $_POST['№_паспорта'];
$Phone = $_POST['Телефон'];
$Inn = $_POST['ИНН'];
$Home = $_POST['Место_проживания'];
$Date = $_POST['Дата_начала_работы'];
$Money = $_POST['Зарплата'];
$result = mysqli_query($db, "UPDATE работники SET ФИО = '$Name', Дата_рождения = '$Birthday', №_паспорта = '$Passport', Телефон = '$Phone', ИНН = '$Inn', Место_проживания = '$Home', Дата_начала_работы = '$Date', Зарплата = '$Money' WHERE работники . ID_работника = '$id'");
header('Location: ./worker.php');