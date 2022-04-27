<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Практическая работа №9</title>
</head>
<body>
<form method="GET">
Имя: <input required type="text" name="name" id="name">
Группа: <input required type="text" name="group" id="group">
<p><br>Пол:</p>
<input required id="man" type="radio" name="sex" value="man">
<label for="man">Мужчина</label>
<input required id="woman" type="radio" name="sex" value="woman">
<label for="woman">Женщина</label>
<p><br>День рождения</p>
<select name="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">39</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="month">
<option value="January">Январь</option>
<option value="February">Февраль</option>
<option value="March">Март</option>
<option value="April">Апрель</option>
<option value="May">Май</option>
<option value="June">Июнь</option>
<option value="July">Июль</option>
<option value="August">Август</option>
<option value="September">Сентябрь</option>
<option value="October">Октябрь</option>
<option value="November">Ноябрь</option>
<option value="December">Декабрь</option>
</select>
<select name="year">
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
</select>
<p><br>Водительское удостоверение</p>
<input type="checkbox" name="ques" id="yes">
<label for="yes">Есть</label>
<p><br></p>
<input type="submit" value="Ввести" name="send">
</form>
<?php
if(isset($_GET['send'])){
$age=2022-$_GET['year'];
echo "Ваш возраст: ".$age;
if(($_GET['sex'])=="man"){
$man_pens=65-$age;
echo "<br>Вам до пенсии осталось $man_pens лет";
}
if(($_GET['sex'])=="woman"){
$woman_pens=63-$age;
echo "<br>Вам до пенсии осталось $woman_pens лет";
}
}
?>
</body>
</html>