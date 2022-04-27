    <!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PR8</title>
        </head>
    <body>
            <form method="GET">
                Имя: <input type="text" name="name" id="name">
        <p><br></p>
                Пол: <input type="text" name="sex" id="sex">
        <p><br></p>
                Возраст: <input type="number" name="age" id="age">
                <input type="submit" value="Ввести" name="send">
            </form>
        <p><br></p>
            <?php
            if(isset($_GET['send'])){
                $name=(string)$_GET['name'];
                $sex=(string)$_GET['sex'];
                $age=(string)$_GET['age'];
                echo "Здравствуйте, $name, Вы указали данные: Возраст $age и Пол $sex<br><br>";
            }
        ?>
            <form method="GET">
                Первое число: <input type="number" name="a" id="a">
                Второе число: <input type="number" name="b" id="b">
                Третье число: <input type="number" name="c" id="c">
            <input type="submit" value="Узнать максимальное и минимальное" name="know">
        <p><br></p>
            </form>
        <?php
            if(isset($_GET['know'])){
                $a=(int)$_GET['a'];
                $b=(int)$_GET['b'];
                $c=(int)$_GET['c'];
                echo max($a,$b,$c)." - максимальное число<br>".min($a,$b,$c)." - минимальное число<br><br>";
            }
        ?>

            <form method="GET">
                Введите слово: <input type="text" name="word" id="word">
                <input type="submit" value="Изменить буквы" name="l">
            </form>
        <?php
            if(isset($_GET['l'])){
                $word=(string)$_GET['word'];
                $res = strtr($word, 'пк', 'он');
                echo $res;
            }
        ?>
    </body>
</html>