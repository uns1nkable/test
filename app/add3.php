<title>Ввод новых данных</title>
<a href="diet.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о диете</h1>
<form action=\"add3.php\" method=\"POST\">
Тип корма: <input type=\"text\" name=\"Тип_корма\"/>
Масса корма в день: <input type=\"number\" min=\"1\" name=\"Масса_корма_в_день\"/>
Частота кормления: <input type=\"number\" min=\"1\" name=\"Частота_кормления\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Type = $_POST['Тип_корма'];
$Mass = $_POST['Масса_корма_в_день'];
$Rate = $_POST['Частота_кормления'];
$result = mysqli_query($db, "INSERT INTO диеты (Тип_корма, Масса_корма_в_день, Частота_кормления) VALUES ('$Type','$Mass','$Rate')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT ID_диеты FROM диеты ORDER BY ID_диеты DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['ID_диеты'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>