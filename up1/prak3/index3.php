<?php
echo "<html><head>"; 
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'; 
echo "<title>Практическая работа №3</title>"; 
echo "</head>"; 
echo "<body>"; 
echo "<h1>Практическая работа №3</h1>";
echo "<p>Задание 1</p>";
echo "<p>Дописать программу, чтобы она вывела в браузере результаты этих операций:</p>";
$x=10;
$y=5;
echo "<p>Сумма:</p>";
$sum=$x+$y;
echo $sum;
echo '<br/>';
echo "<p>Разность:</p>";
$raz=$x-$y;
echo $raz;
echo '<br/>';
echo "<p>Произведение:</p>";
$pro=$x*$y;
echo $pro;
echo '<br/>';
echo "<p>Частное:</p>";
$cha=$x/$y;
echo $cha;
echo '<br/>';

echo "<p>Задание 2</p>";
// ************************************************** //
echo "<p>Изменить значения переменных, добавить к переменной $x день месяца рождения, а к переменной $y цифровой код месяца дня рождения:</p>";

echo "<p>Добавление к переменной $x день месяца рождения:</p>";
$dr=$x+5;
echo $dr;
echo '<br/>';
// ************************************************** //
echo "<p>Добавление к переменной $y день месяца рождения:</p>";
$sum=5+$y;
echo $sum;
echo '<br/>';
// ************************************************** //
echo "<p>Выполнение программы еще раз:</p>";
echo "<p>Добавление к переменной $x день месяца рождения:</p>";
$dr=$x+5;
echo $dr;
echo '<br/>';
// ************************************************** //
echo "<p>Добавление к переменной $y день месяца рождения:</p>";
$sum=5+$y;
echo $sum;
echo '<br/>';
// ************************************************** //
echo "<p>Еще раз изменить значения переменных, добавить последнюю и предпоследнюю цифру зачетной книжки к переменным $x и $y соответственно.</p>";
// ************************************************** //
echo "<p>Добавление последней и предпоследней цифры зачетной книжки к переменным $x</p>";
echo "<p>Последняя:</p>";
$after=$x+8;
echo $after;
echo '<br/>';
// ************************************************** //
echo "<p>Предпоследняя:</p>";
$past=$x+3;
echo $past;
echo '<br/>';
// ************************************************** //
echo "<p>Добавление последней и предпоследней цифры зачетной книжки к переменным $y</p>";
echo "<p>Последняя:</p>";
$pos=7+$y;
echo $pos;
echo '<br/>';
// ************************************************** //
echo "<p>Предпоследняя:</p>";
$by=1+$y;
echo $by;
echo '<br/>';
// ************************************************** //
echo "<p>Задание 3</p>";

echo "<p>1. Создать программу, которая число а увеличивает вдвое и присваивает данное значение некоторой переменной b.</p>";
$a=6;
$b=pow($a, 2);
echo $b;
echo '<br/>';
// ************************************************** //
echo "<p>2. Создайте программу, которая число к уменьшает в 3 раза и полученный результат увеличивает на 1.</p>";
$k=33/3;
$g=$k+1;
echo $g;
echo '<br/>';
// ************************************************** //
echo "<p>3. Вычислить площадь равностороннего треугольника по формуле S=1/4*a*(Корень из трех), где а – сторона треугольника.</p>";
$s=1/4*$a*sqrt(3);
echo $s;
// ************************************************** //
echo "<p>4. Используя математические функции найти максимальное и минимальное число из 3-х.</p>";
echo "<p>Максимальное:</p>";
$u=30;
$f=57;
$v=68;
echo (max($u,$f,$v));
echo "<p>Минимальное:</p>";
$u=30;
$f=57;
$v=68;
echo (min($u,$f,$v));
echo "</body>"; 
echo "</html>"; 
?>