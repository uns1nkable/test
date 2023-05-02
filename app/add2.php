<title>Ввод новых данных</title>
<a href="breed.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о породе</h1>
<form action=\"add2.php\" method=\"POST\">
Название: <input type=\"text\" name=\"Название\"/>
Средняя производительность: <input type=\"number\" min=\"1\" name=\"Средняя_производительность\"/>
Средний вес: <input type=\"number\" min=\"1\" name=\"Средний_вес\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Name = $_POST['Название'];
$Power = $_POST['Средняя_производительность'];
$Weight = $_POST['Средний_вес'];
$result = mysqli_query($db, "INSERT INTO порода (Название, Средняя_производительность, Средний_вес) VALUES ('$Name','$Power','$Weight')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT ID_породы FROM порода ORDER BY ID_породы DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['ID_породы'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>