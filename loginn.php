<?php session_start(); ?>

<?php
$Utilizador = $_POST[nome];
$Password = $_POST[pass];
if ($Utilizador == 'Visitante' && $Password == 'esmtg')
{
    $_SESSION[Utilizador] = $Utilizador;
    setcookie('bolacha', $Utilizador, time()+60);
    header("location:main.php");
}
else{
    header("location:erro.php"); 
}
?>
