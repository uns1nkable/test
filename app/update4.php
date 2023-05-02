<title>Ввод изменений</title>
<a href="corral.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM загоны WHERE №_загона = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update4_extra.php" method="POST">
<input type="hidden" name="№_загона" value="<?= $pro['№_загона'] ?>">
№ цеха: <input type="number" min="1" name="№_цеха" value="<?= $pro['№_цеха'] ?>">
ID работника: <input type="number" min="1" name="ID_работника" value="<?= $pro['ID_работника'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>