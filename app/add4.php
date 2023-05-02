<title>Ввод новых данных</title>
<a href="corral.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о загоне</h1>
<form action=\"add4.php\" method=\"POST\">
№ цеха: <input type=\"number\" min=\"1\" name=\"№_цеха\"/>
ID работника: <input type=\"number\" min=\"1\" name=\"ID_работника\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Shop = $_POST['№_цеха'];
$Worker = $_POST['ID_работника'];
$result = mysqli_query($db, "INSERT INTO загоны (№_цеха, ID_работника) VALUES ('$Shop','$Worker')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT №_загона FROM загоны ORDER BY №_загона DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['№_загона'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>