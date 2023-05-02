<title>Ввод изменений</title>
<a href="breed.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM порода WHERE ID_породы = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update2_extra.php" method="POST">
<input type="hidden" name="ID_породы" value="<?= $pro['ID_породы'] ?>">
Название: <input type="text" name="Название" value="<?= $pro['Название'] ?>">
Средняя производительность: <input type="number" min="1" name="Средняя_производительность" value="<?= $pro['Средняя_производительность'] ?>">
Средний вес: <input type="number" min="1" name="Средний_вес" value="<?= $pro['Средний_вес'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>