<?php session_start(); ?>

<?php 

    $user = $_POST[username];
    $pass = $_POST[password];
if ($user == 'Visitante' && $pass == 'esmtg')
{
    $_SESSION[user] = $user;
    setcookie("bolacha", $user, time()+60 );
    header("Location:main.php");

}
else
{
    header("Location:erro.php");
}







?>