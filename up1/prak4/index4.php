<?php
echo "<html><head>"; 
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'; 
echo "<title>Практическая работа №4</title>"; 
echo "</head>"; 
echo "<body>"; 
echo "<h1>Практическая работа №4</h1>";
echo "<p>Задание 1</p>";
echo "<p>Составить программу выводящую квадраты чисел от 4 до 9. Модернизировать программу чтобы можно было с <br/> помощью переменных указывать диапазон чисел, для которых нужно выводить квадраты. Добавить вывод <br/> квадратов чисел в виде таблицы HTML.</p>";
?> 
<table border=1>
<?php
for ($x=4; $x<10; $x++){
$ot=pow($x,2);
echo "<tr><td>".$x."</td><td>*</td><td>".$x."</td><td>=</td><td>".$ot."</td></tr>";
}
echo '<br/>';
?>
</table>
<?php
echo "<p>Задание 2</p>";
echo "<p>Составить программу, выводящую таблицу умножения числе от 4 до 9.</p>";
$a=60;
$b=10;
if ($a > $b);
?>

<table border=4>
<?php
for($i=0, $a=4, $b=1; $i<60; $i++,$b++){
    if($b == 11){
        $a++;
        $b = 1;
    }
    echo "<tr><td>$a</td><td> * </td><td>$b</td><td> = </td><td>" . $a * $b . '</td></tr>';
}
echo "</body>"; 
echo "</html>"; 
?>
</table>
