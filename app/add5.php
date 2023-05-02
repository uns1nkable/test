<title>Ввод новых данных</title>
<a href="worker.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о работнике</h1>
<form action=\"add5.php\" method=\"POST\">
ФИО: <input type=\"text\" name=\"ФИО\"/>
Дата рождения: <input type=\"date\" name=\"Дата_рождения\"/>
№ паспорта: <input type=\"number\" min=\"0\" name=\"№_паспорта\"/>
Телефон: <input type=\"number\" min=\"0\" name=\"Телефон\"/>
ИНН: <input type=\"number\" min=\"0\" name=\"ИНН\"/>
Место проживания: <input type=\"text\" name=\"Место_проживания\"/>
Дата начала работы: <input type=\"date\" name=\"Дата_начала_работы\"/><br><br>
Зарплата: <input type=\"number\" min=\"0\" name=\"Зарплата\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Name = $_POST['ФИО'];
$Birthday = $_POST['Дата_рождения'];
$Passport = $_POST['№_паспорта'];
$Phone = $_POST['Телефон'];
$Inn = $_POST['ИНН'];
$Home = $_POST['Место_проживания'];
$Date = $_POST['Дата_начала_работы'];
$Money = $_POST['Зарплата'];
$result = mysqli_query($db, "INSERT INTO работники (ФИО, Дата_рождения, №_паспорта, Телефон, ИНН, Место_проживания, Дата_начала_работы, Зарплата) VALUES ('$Name','$Birthday','$Passport','$Phone','$Inn','$Home','$Date','$Money')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT ID_работника FROM работники ORDER BY ID_работника DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['ID_работника'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>