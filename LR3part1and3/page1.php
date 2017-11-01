<?php
	session_start();
	$username=$_SESSION['admin_login'];
	$_SESSION['pages'][] = $_SERVER['PHP_SELF'];

	if($_POST['submit_logout']) {
		$_SESSION = array();
		session_destroy();
		$_SESSION = array();
		header ('Location: index.php');
		exit();
	}
?>
<HTML>
<HEAD>
    <meta charset="utf-8">
    <title>php</title>
    <link rel="stylesheet" type="text/css" href="/style.css"/>
</HEAD>
<BODY style="font-size: 20px; font-family: 'Trebuchet MS';">

<form method="post" id='hello' ><br>
    <input name="submit_logout"  id="submit" value="Выйти" type="submit">
</form>
<br>
<?php
if(isset($_SESSION['pages'])) {
    print '<h2>Список посещенных страниц</h2>';
    print '<ol>';
    foreach ($_SESSION['pages'] as $page) {
        echo '<li>', $page, '</li>';
    }
    print '</ol>';
}

?>
<form action='Array3.php' method='post'>
	<input type='submit' value='Page 2'>
</form>
<form action='Begin33.php' method='post'>
	<input type='submit' value='Page 3'>
</form>
</BODY>
</HTML>
