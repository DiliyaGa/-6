<?php
echo "<html><head>"; 
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'; 
echo "<title>Практическая работа №2</title>"; 
echo "</head>"; 
echo "<body>"; 
echo "<h1>Практическая работа №2</h1>";
echo "<p>Определить переменные:</p>";
// ************************************************** //
$institution=" ГАПОУ НИТ\n"; 
$department="НИТ";
$place="Образовательное учреждение:\n".$institution."отделение:\n".$department;
echo $place;
echo '<br/>';
// ************************************************** //
$commission=" ГАПОУ НИТ\n"; 
$cycle="Цикловая комиссия:\n".$commission;
echo $cycle;
echo '<br/>';
// ************************************************** //
$object=" ПМ 06\n"; 
$office="2.4";
$study="Предмет:\n".$institution."кабинет:\n".$department;
echo $study;
echo '<br/>';
// ************************************************** //
$teacher="Свешникова А.А.\n"; 
$info="Преподаватель:\n".$teacher;
echo $info;
echo '<br/>';
// ************************************************** //
$group=427;
$name="Гафарова Д.Р.\n"; 
$text="ФИО студента:\n".$name. "номер группы:\n".$group ;
echo $text;
echo '<br/>';
echo "</body>"; 
echo "</html>"; 
?>