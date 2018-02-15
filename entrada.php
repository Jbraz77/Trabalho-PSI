<html>
<head>
    <title>Entrada</title>
</head>
<body>

            <form method="POST" enctype="multipart/form-data" action="cod.php" target="_parent">
                <h2>Dados do utilizador: </h2>
                <label>Username: </label>
                <input name="username" type="text" size="30" maxlength="30"><br>
                <label>Password: </label>
                <input name="password" type="password" size="30" maxlength="30">
                <input name="secure" type="hidden" size="30" value="1"><br>
                <input name="Entrar" type="submit" value="Entrar">
                <a href="dados.html" >Registe-se</a>
                </form>

</body>
</html>