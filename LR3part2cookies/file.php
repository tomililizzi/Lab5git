<?php
$value=$_POST['name'];;
setcookie("name", $value, time()+60);
if($_COOKIE['name']) {echo "Hello  ".$_COOKIE['name'];}
else {
	if($_POST['name']) {
		$name =$_POST['name'];
		$_COOKIE['name'] = $name;
		echo "Hello ".$_COOKIE['name'];
	}
	else {die("Hello stranger - you did not fill the name field! Please go back and full the name field!");}
}
?>
<html>
    <head>
        <title> Array20 </title>
	    <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="A2CSS.css">
		<script language = "javascript">
			var arr = new Array (), k, l, s = 0;
			function MyArray () {
				n = parseInt(document.getElementById("ID1").value);
				for (var i = 0; i < n; i++)
					arr[i] = prompt("Введите " + (i + 1) + "-ое число");
			}
			function MyOwn () {
				k = parseInt(document.getElementById("ID2").value);
				l = parseInt(document.getElementById("ID3").value);
				for (i = k-1; i <= l-1; i++) {
				s = s + Number(arr[i]);
				}
				document.getElementById("ID4").value = s;
			}
		</script>
    </head>
    <body>
		<h1>Лабораторная работа №6. Задание 8.</h1>
		<p>Дан массив размера N и целые числа K и L (1 ≤ K ≤ L ≤ N). Найти сумму элементов массива с номерами от K до L включительно.</p>
		<form>
			<div>
				<label>Введите количество элементов массива (N) <input class = "right" id = "ID1" onkeyup = "MyArray();"></label>
			</div>
			<div>
				<label>Введите целое число К меньше N <input class = "right1" id = "ID2"></label>
			</div>
			<div>
				<label>Введите целое число L больше К но меньше N <input id = "ID3" onkeyup = "MyOwn();"></label>
			</div>
			<div>
				<label>Сумма элементов массива равна: <input class = "right2" id = "ID4"></label>
			</div>
		</form>
		<form action='Array3.php' method='post'>
			<input type='submit' value='Page 2'>
		</form>
	</body>
</html>