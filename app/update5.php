<title>Ввод изменений</title>
<a href="worker.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM работники WHERE ID_работника = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update5_extra.php" method="POST">
<input type="hidden" name="ID_работника" value="<?= $pro['ID_работника'] ?>">
ФИО: <input type="text" name="ФИО" value="<?= $pro['ФИО'] ?>">
Дата рождения: <input type="date" name="Дата_рождения" value="<?= $pro['Дата_рождения'] ?>">
№ паспорта: <input type="number" min="0" name="№_паспорта" value="<?= $pro['№_паспорта'] ?>">
Телефон: <input type="number" min="0" name="Телефон" value="<?= $pro['Телефон'] ?>">
ИНН: <input type="number" min="0" name="ИНН" value="<?= $pro['ИНН'] ?>">
Место проживания: <input type="text" name="Место_проживания" value="<?= $pro['Место_проживания'] ?>">
Дата начала работы: <input type="date" name="Дата_начала_работы" value="<?= $pro['Дата_начала_работы'] ?>"><br><br>
Зарплата: <input type="number" min="0" name="Зарплата" value="<?= $pro['Зарплата'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>