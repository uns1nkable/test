<title>Ввод новых данных</title>
<a href="cow.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о корове</h1>
<form action=\"add1.php\" method=\"POST\">
Вес (кг): <input type=\"number\" min=\"1\" name=\"Вес\"/>
Дата рождения: <input type=\"date\" name=\"Дата_рождения\"/>
ID породы: <input type=\"number\" min=\"1\" name=\"ID_породы\"/>
Кол-ва молока ежедневно (л): <input type=\"number\" min=\"0\" name=\"Кол-ва_молока_ежедневно_(л)\"/>
№ загона: <input type=\"number\" min=\"1\" name=\"№_загона\"/>
ID диеты: <input type=\"number\" min=\"1\" name=\"ID_диеты\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Weight = $_POST['Вес'];
$Date = $_POST['Дата_рождения'];
$Breed = $_POST['ID_породы'];
$Milk = $_POST['Кол-ва_молока_ежедневно_(л)'];
$Corral = $_POST['№_загона'];
$Diet = $_POST['ID_диеты'];
$result = mysqli_query($db, "INSERT INTO коровы (Вес, Дата_рождения, ID_породы, Молока_ежедневно, №_загона, ID_диеты) VALUES ('$Weight','$Date','$Breed','$Milk','$Corral','$Diet')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT ID_коровы FROM коровы ORDER BY ID_коровы DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['ID_коровы'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>