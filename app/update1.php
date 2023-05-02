<title>Ввод изменений</title>
<a href="cow.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM коровы WHERE ID_коровы = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update1_extra.php" method="POST">
<input type="hidden" name="ID_коровы" value="<?= $pro['ID_коровы'] ?>">
Вес (кг): <input type="number" min="1" name="Вес" value="<?= $pro['Вес'] ?>">
Дата рождения: <input type="date" name="Дата_рождения" value="<?= $pro['Дата_рождения'] ?>">
ID породы: <input type="number" min="1" name="ID_породы" value="<?= $pro['ID_породы'] ?>">
Кол-ва молока ежедневно (л): <input type="number" min="0" name="Молока_ежедневно" value="<?= $pro['Молока_ежедневно'] ?>">
№ загона: <input type="number" min="1" name="№_загона" value="<?= $pro['№_загона'] ?>">
ID диеты: <input type="number" min="1" name="ID_диеты" value="<?= $pro['ID_диеты'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>