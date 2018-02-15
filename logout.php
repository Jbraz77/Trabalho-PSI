<?php session_start();
if ( Isset ($_SESSION[Utilizador]))
{
    unset($_SESSION);
    session_destroy();
    header("location:entrada.html");
}
?>