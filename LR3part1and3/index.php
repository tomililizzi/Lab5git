<?php
    session_start();
    $_SESSION['pages'][] = $_SERVER['PHP_SELF'];

    $error=0;
    if($_POST['submit']) {
        if ($_SESSION['admin_login'] == $_POST['username'] and $_SESSION['admin_pass'] == md5($_POST['password'])) {
            header("Location: page1.php");
            exit;
        }
		else $error = 1;
    }

    if($_POST['r_submit']) {
        $_SESSION['admin_login'] = $_POST['r_username'];
        $_SESSION['admin_pass'] = md5($_POST['r_password']);
    }
?>
<HTML>
<HEAD>
    <meta charset="utf-8">
    <title> login now</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
        <script> 
			function look(type){
				param=document.getElementById(type);
				if(param.style.visibility == "visible") param.style.visibility = "hidden";
				else param.style.visibility = "visible"
			}
		</script>
</HEAD>
<BODY style="font-size: 20px; font-family: 'Trebuchet MS';">
	<form method="post" id="login">
		<fieldset id="inputs">
			<input name="username" placeholder="Логин" type="text"><br>
			<input name="password" placeholder="Пароль" type="password">
		</fieldset>
		<fieldset id="actions">
			<input name="submit"  id="submit" value="Войти" type="submit">
			<br><br>
			<a href="#" onClick="look('reg_form'); return false;"> Регистрация </a>
		</fieldset>
	</form>

	<form method="post" id="reg_form">
		<fieldset id="inputs">
			<input name="email" placeholder="E-mail" type="email"><br>
			<input name="r_username" placeholder="Логин" type="text"><br>
			<input name="r_password" placeholder="Пароль" type="password">
		</fieldset>
		<fieldset id="actions">
			<input name="r_submit"  id="submit" value="Sign up" type="submit">
		</fieldset>
	</form>
	<?php
	if($error==1) echo '<p id="error">Логин или пароль неверны!</p>';
	?>
</BODY>
</HTML>