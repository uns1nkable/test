<title>Статистика</title>
<a href="index.php"><h2><p align="left">Вернуться на главную</p></h2></a>
<?php
include ("db.php");
$res1 = mysqli_query($db, "SELECT COUNT(*) FROM коровы");
$row1 = mysqli_fetch_row($res1);
$total1 = $row1[0];
echo "<body bgcolor=#DCDCDC><br/><br/>";
echo '<div style="text-align: center;font-size:2.15em;color:#008080;font-weight:bold;">Количество коров: '.$total1.'</span></div>';
echo "<br/><br/>";
$res2 = mysqli_query($db, "SELECT COUNT(*) FROM работники");
$row2 = mysqli_fetch_row($res2);
$total2 = $row2[0];
echo '<div style="text-align: center;font-size:2.15em;color:#008080;font-weight:bold;">Количество сотрудников: '.$total2.'</span></div>';
?>