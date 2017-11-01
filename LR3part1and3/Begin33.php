<?php
session_start();
$_SESSION['pages'][] = $_SERVER['PHP_SELF'];
?>
<html>
    <head>
        <title> Begin33 </title>
	    <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="BCSS.css">
		<script language = "javascript">
			var a,x,b,c,d;
			function MyOnt () {
				x = parseFloat (document.getElementById("ID1").value);
				a = parseFloat (document.getElementById("ID2").value);
				b = a/x;
				document.getElementById("ID3").value = b;
			}
			function MyOnt1 () {
				a = parseFloat (document.getElementById("ID2").value);
				c = parseFloat (document.getElementById("ID4").value);
				d = (c*a)/x;
				document.getElementById("ID5").value = d;
			}
		</script>
    </head>
    <body>
		<h1>Лабораторная работа №6. Задание 1.</h1>
		<p>Известно, что X кг конфет стоит A рублей. Определить, сколько стоит 1 кг и Y кг этих же конфет.</p>
		<form>
			<div>
				<label>Введите количество конфет в кг (Х) <input id = "ID1"></label>
			</div>
			<div>
				<label>Введите стоимость конфет (А) <input class = "right" id = "ID2" onkeyup = "MyOnt();"></label>
			</div>
		<div class = "answer">
			<div>
				<label>Тогда<br> 1 кг конфет стоит <input class = "right1" id = "ID3"></label>
			</div>
		</div>	
		<div class = "answer1">
			<div>
				<label>Введите количество конфет в кг (Y), стоимость которых вы хотите узнать <input class = "right2" id = "ID4" onkeyup = "MyOnt1();"></label>
			</div>
			<div>
				<label>Такое количество конфет стоит <input id = "ID5"></label>
			</div>
		</div>
		</form>
	</body>
</html>