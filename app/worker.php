<title>Информация о работниках</title>
<a href="index.php"><h2><p align="left">Вернуться  на главную</p></h2></a>
<?php
include ("db.php");
?>
<html>
<head>
<link rel="stylesheet" href="button.css">
<style>
.myTable { 
width: 100%;
text-align: left;
background-color: lemonchiffon;
border-collapse: collapse; 
}
.myTable th { 
background-color: goldenrod;
color: white; 
}
.myTable td, 
.myTable th { 
padding: 10px;
border: 1px solid goldenrod; 
}
</style>
</head>
<body>
<table class="myTable">
<tr>
<th>ID работника</th>
<th>ФИО</th>
<th>Дата рождения</th>
<th>№ паспорта</th>
<th>Телефон</th>
<th>ИНН</th>
<th>Место проживания</th>
<th>Дата начала работы</th>
<th>Зарплата</th>
<th>Внести изменения</th>
<th>Удалить информацию</th>
</tr>
<?php
$pro = mysqli_query($db, "SELECT * FROM работники");
$pro = mysqli_fetch_all($pro);
foreach ($pro as $pr) {
?>
<tr>
<td><?=$pr[0] ?></td>
<td><?=$pr[1] ?></td>
<td><?=$pr[2] ?></td>
<td><?=$pr[3] ?></td>
<td><?=$pr[4] ?></td>
<td><?=$pr[5] ?></td>
<td><?=$pr[6] ?></td>
<td><?=$pr[7] ?></td>
<td><?=$pr[8] ?> (руб)</td>
<td><a style="color: blue; text-decoration: none;" href="update5.php?id=<?=$pr[0] ?>">Изменить</a></td>
<td><a style="color: #DC143C; text-decoration: none;" href="delete5.php?id=<?=$pr[0] ?>">Удалить</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
<a href="add5.php" class="button">Добавить новую запись</a>