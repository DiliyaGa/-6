<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая работа №7</title>
</head>
<body>
<FORM method="POST">
<input type="number" name="a" id="a">
<input type="number" name="b" id="b">
<input type="submit" value="ot" name="bunt">
</FORM>

<?php
if(isset($_POST['bunt']))
{
    $a1=(int)$_POST['a'];
    $b1=(int)$_POST['b'];
    if($a1<$b1){
        echo "Второе число больше и равно: ".$b1."<br>";
    }
    else{
        echo "Первое число больше и равно: ".$a1."<br>";
    }
    if($a1<0){
        echo "Первое число $a1 меньше 0 <br>";
    }
    if($a1>0){
        echo "Первое число $a1 больше 0 <br>";
    }
    if($a1==0){
        echo "Первое число $a1 равно 0 <br>";
    }
    if($b1<0){
        echo "Второе число $b1 равно 0 <br>";
    }
    if($b1>0){
        echo "Второе число $b1 равно 0 <br>";
    }
    if($b1==0){
        echo "Второе число $b1 равно 0 <br>";
    }
}
?>
<form method="GET">
        Логин: <input type="text" name="login" id="login">
        Пароль: <input type="password" name="password" id="password">
    <input type="submit" value="Войти" id="submit" name="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    $login=(string)$_GET['login'];
    $password=(string)$_GET['password'];
    echo "Неверный логин или пароль<br><br>";
}
?>
</body>
</html>