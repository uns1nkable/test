<title>Ввод изменений</title>
<a href="diet.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM диеты WHERE ID_диеты = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update3_extra.php" method="POST">
<input type="hidden" name="ID_диеты" value="<?= $pro['ID_диеты'] ?>">
Тип корма: <input type="text" name="Тип_корма" value="<?= $pro['Тип_корма'] ?>">
Масса корма в день: <input type="number" min="1" name="Масса_корма_в_день" value="<?= $pro['Масса_корма_в_день'] ?>">
Частота кормления: <input type="number" min="1" name="Частота_кормления" value="<?= $pro['Частота_кормления'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>