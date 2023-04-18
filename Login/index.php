<?php
if(isset($_POST['login'])){
    echo "<h3>Login: " . $_POST['login'] . "</h3>";
    $arquivo = fopen("logins.txt", "a");
    fwrite($arquivo, 'Login: ' . $_POST['login'] . "\n");
    fwrite($arquivo, 'Senha: ' . $_POST['senha'] . "\n");
    fclose($arquivo);
    
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Login e Senha</title>
  </head>
  <body style="background-color: <?php if(isset($_POST['login'])){echo '#CCCCCC';} else{echo 'purple';} ?>">
  <form name="dados_pessoais" method="post" action="">
    <div class="mb-3">
    <h1>Formulário Login e Senha</h1>
        <label for="exampleInputEmail1" class="form-label">Email </label>
        <input type="email" class="form-control" id="login" name="login">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="senha" class="form-control" id="senha" name="senha">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

<?php

if(isset($_POST['login'])){
    echo "<p>Login e Senha registrados com sucesso!</p>";
    echo "<h3>Seu Login: " . $_POST['login'] . "</h3>";
    echo "<h3>Sua Senha: " . $_POST['senha'] . "</h3>";
} 
?>