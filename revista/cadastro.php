<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cadastro.css" rel="stylesheet"/>
    <title>Cadastro</title>
    <style>
        form {
            width: 300px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="cadastrar.php" method="post" enctype="multipart/form-data">
        <label for="nome">
            Nome: <input id="nome" type="text" name="nome" required maxlength="80" minlength="2"/>
            <span></span>
        </label>
        <label for="dn">
            Data de nascimento: <input id="dn" type="date" name="dn" required/>
            <span></span>
        </label>
        <label for="email">
            E-mail: <input id="email" type="email" name="email" required maxlength="70" />
            <span></span>
        </label>
        <label for="pass">
            Senha: <input id="pass" type="password" name="pass" required maxlength="40"/>
            <span></span>
        </label>
        <label for="foto">
            Foto: <input id="foto" type="file" name="foto" accept="image/png, image/jpeg, image/jpg" required/>
            <span></span>
        </label>
        <button type="submit">Enviar</button>
    </form>
    <form action="lista-usuario.php" method="post" enctype="multipart/form-data">
        <button type="submit">Acessar lista de usuarios</button>
    </form>
</body>
</html>