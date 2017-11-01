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
        <title> Array3 </title>
	    <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="ACSS.css">
		<script language = "javascript">
			var arr = new Array (), n, a, d;
			function MyArray () {
				n = parseInt(document.getElementById("ID1").value);
				a = parseInt(document.getElementById("ID2").value);
				d = parseInt(document.getElementById("ID3").value);
				arr[1] = a;
				for ( var i = 2; i <= n; i++)
				arr[i] = arr[i-1] + d;
				for ( var j = 1; j <= n; j++)
				document.getElementById('view').innerHTML+=arr[j] + ";";
				
			}
		</script>
    </head>
    <body>
		<h1>Лабораторная работа №6. Задание 5.</h1>
		<p>Дано целое число N (> 1), а также первый член A и разность D арифметической прогрессии. Сформировать и вывести массив размера N, содержащий N первых членов данной прогрессии:
A, A + D, A + 2·D, A + 3·D, … .</p>
		<form>
			<div>
				<label>Введите размер массива <input class = "right" id = "ID1"></label>
			</div>
			<div>
				<label>Введите первый член массива <input class = "right1" id = "ID2"></label>
			</div>
			<div>
				<label>Введите разность геометрической прогрессии <input id = "ID3" onkeyup = "MyArray();"></label>
			</div>
		</form>
		<div><label>Арифметическая прогрессия: </label>
		<div class = "qwerty" id='view'></div>
		</div>
	</body>
</html>