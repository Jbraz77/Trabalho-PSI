<?php session_start();
    if (! Isset ($_SESSION[Utilizador]))
    {
        header("Location:erro.php");
    }
    elseif (! Isset ($_COOKIE[bolacha]))
    {
        header("Location:erro.php");
    }
    else
    {
        
    }
    echo "<html>
    <head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #fff;
  color: black;
}
</style>
</head> 
<body background='tudo.jpeg' style='background-size:cover'>
    <div class='topnav'>
        <a class='active' href='#home'>Home</a>
        <a href='StandVirtual.html'>StandVirtual</a>
        <a href='Pessoas.php'>Contactos</a>
        <a href='turma12C.php'>Funcionários</a>
        <a href='logout.php'>Terminar Sessão</a>
    </div>

    <div style='padding-left:16px'>
        <h2>ola</h2>
        <p>asfdsdfa</p>
    </div>

</body>
</html>";
        

?>