<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая работа №8</title>
</head>
<body>
<form method="GET">
        Имя: <input type="text" name="name" id="name">
        Возраст: <input type="text" name="voz" id="voz">
        Пол: <input type="text" name="pol" id="pol">
    <input type="submit" value="Отправить" id="submit" name="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    $name=(string)$_GET['name'];
    $voz=(string)$_GET['voz'];
    $pol=(string)$_GET['pol'];
    echo "Здравствуйте, $name, Вы указали данные: Возраст $voz и Пол $pol<br><br>";
}
?>
<form method="GET">
Первое число: <input type="number" name="a" id="a">
Второе число: <input type="number" name="b" id="b">
Третье число: <input type="number" name="c" id="c">
<input type="submit" value="Узнать" name="btn" id="btn">
</form>

<?php
if(isset($_GET['btn']))
{
    $a=(int)$_GET['a'];
    $b=(int)$_GET['b'];
    $c=(int)$_GET['c'];
    echo max($a,$b,$c). " - максимальное число <br>" .min($a,$b,$c). " - минимальное число <br><br>";
}
?>
<form method="GET">
Введите текст: <input type="text" name="text" id="text">
<input type="submit" value="Проверить" name="btn1" id="btn1">
</form>
<?php
if (isset($_GET['btn1']))
{
    $text=$_GET['text'];
    $res = strtr($text, 'ак', 'он');
    echo $res;
}
?>
</body>
</html>