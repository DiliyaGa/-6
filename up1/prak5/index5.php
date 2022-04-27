<?php
echo "<html><head>"; 
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'; 
echo "<title>Практическая работа №5</title>"; 
echo "</head>"; 
echo "<body>"; 
echo "<h1>Практическая работа №5</h1>";
echo "<p>Задание 1</p>";
echo "<p> Модифицировать программу из Задания 2 практической работы №4, так чтобы <br/>
а) если произведение чисел меньше чем 40, то оно должно выводится зеленым цветом; <br/>
б) если  произведение чисел больше чем 75, то оно должно выводится красным цветом и оформлено полужирным шрифтом; <br/>
в) если произведение чисел четное, то оно должно выводится на сером фоне.</p>";
?>
<?php
echo "<p>Задание 2</p>";
echo "<p>Составить программу, выводящую таблицу умножения числе от 4 до 9.</p>";
$a=60;
$b=10;
if ($a > $b);
?>
<table border=1>
<?php
for ($i=4; $i <= 9; $i++ ) {
    for ($k=1; $k <= 10; $k++ ){
        $answer=$i*$k;
        $color="black";
        $background="white";
        $font="regular";
        if($answer<40){
            $color="Lime";
        }
        if($answer>75){
            $color="red";
            $font="bold";
        }
        if($answer%2==0){
            $background="gray";
        }
        echo "<tr><td>$i</td><td> x </td><td> $k</td><td> = </td><td style = 'color:".$color."; color:".$color."; font-weight: ".$font."; background:".$background."'>" .$answer. '</td></tr>';
        }
    }

echo "</body>"; 
echo "</html>"; 
?>
</table>