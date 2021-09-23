<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔐️ senhaCrypto | Projeto de criptografia de senha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <header class="section has-text-centered has-background-primary">
        <h1 class="title has-text-white is-uppercase">senhaCrypto | Projeto de criptografia de senha</h1>
    </header>
    <div class="section is-flex is-justify-content-center ">
        <form>
            <div class="field"> <label for="email" class="label is-uppercase"> Seu email </label>
                <div class="control"><input class="input" type="email" name="email" id="email" required></div>
            </div>
            <div class="field"> <label for="email" class="label is-uppercase"> Senha </label>
                <div class="control"><input class="input" type="password" name="senha" id="senha" required></div>
            </div>
            <div class="field is-grouped is-justify-content-center"">
              <p class="control">
                <input type="submit" class="button input is-primary" value="Entrar">
              </p>
              <p class="control">
                <input type="button" class="button input" value="Limpar">
              </p>
            </div>
        </form>
    </div>
</body>

</html> 

<?php

$pdo = new PDO('sqlite:banco.sqlite');

$sql ="insert into pessoa(id,nome,idade,email,senha) values(1,'gabriel',23,'lllk@sdsd.com','abc');";

$pdo->exec($sql);








