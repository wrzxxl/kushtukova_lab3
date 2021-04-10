	<form action="Lab_3_Опалев_П-811.php" method="get">
		<input type="text" name="num1" placeholder="Первое число"><br>
		<input type="text" name="num2" placeholder="Второе число"><br>
		<input type="submit" value="Отправить">
	</form>
<?php
$link = mysqli_connect('project', 'root', 'root', 'users');
if (!$link) {
	die("Ошибка " . mysqli_error($link));
}
echo "1)Вы успешно подключились<br>";

echo "2)Двумерный массив:<br>";
$query = mysqli_query($link,'SELECT `ar1`,`ar2`,`ar3`,`ar4` FROM `array`');
while ($result = mysqli_fetch_array($query)) {
	echo "{$result['ar1']} {$result['ar2']} {$result['ar3']} {$result['ar4']}<br>";
}
echo "3)Четные числа от 3 до 300:<br>";
for ($i=3; $i <= 300; $i++) {
	if ($i % 2 == 0) {
		echo "$i ";
	}
}
echo "<br>";

$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$s=$num1+$num2;
echo "4)Сумма $num1 и $num2 = $s<br>";

echo "5)Двумерный массив заглавных латинских букв 5 на 4 элемента:<br>";
$arr=[['A','B','C','D','E'],['F','G','H','I','J'],['K','L','M','N','O'],['P','Q','R','S','T']];
foreach ($arr as list($a,$b,$c,$d,$e)) {
	echo "$a $b $c $d $e<br>";
}

?>