<?php session_start(); ?>

<html>
<head>
	<title>Login</title>
</head>
<body>
<?php
$_SESSION[login] = $_POST[secure];
?>

<?php
if ($_SESSION[login]==0)
{
	echo'<form method="post" enctype="multipart/form-data" action="login.php" target="_parent">
	<p>Username: </p>
	<input name="username" type="text" size="30" maxlenght="30">
	<p>Password: </p>
	<input name="password" type="password" size="30" maxlenght="30"><br>
	<input name="secure" type="hidden" value="1" size="30">
	<input name="Enviar" type="submit" value="Enviar">
	</form>';
}
else{
	if ($_POST[username] == "admin" && $_POST[password]=="admin")
	{
		$_SESSION[user] = $_POST[username];
		echo '<a href="#" alt="' .$_SESSION[user]. '">Hello Admin </a> ' .$_SESSION[user]. '<a
		href="iiii.html" onclick="session_destroy()"; $login=0;"> Desligar</a></p>';
	}
	elseif ($_POST[username] == "user" && $_POST[password]=="user")
	{
		$_SESSION[user] = $_POST[username];
		echo '<a href="#" alt="' .$_SESSION[user]. '">Hello User </a> ' .$_SESSION[user]. '<a
		href="iiii.html" onclick="session_destroy()"; $login=0;"> Desligar</a></p>';
	}
	else{
		header("location:erro.php");
	}
}
?>
</body>
</html>