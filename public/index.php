<?php
session_start();

require_once('../action/Contas.php');
require_once('../database/conexao.php');

$database = new Conexao();
$db = $database->getconnection();
$contas = new Contas($db);

if(isset($_POST['logar'])){
    $nomeUsuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];

    if($contas->logar($nomeUsuario, $senha)){
        $_SESSION['nomeUsuario'] = $nomeUsuario;
        header("Location: ../view/home.php");
        exit();
    }else{
        print "<script>alert('Credenciais Inválidas')</script>";
    }
}
?>
<!DOCTYPE html> <!--Documento HTML-->
<html lang="pt-BR"> <!--Página em Português-BR-->

<head> <!--Cabeça-Funções internas-->
    <meta charset="UTF-8"> <!--Caractéres especiais-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Proporção p.diferentes dimensões d.telas-->
    <script type="text/javascript" src="https://db.onlinewebfonts.com/s/14936bb7a4b6575fd2eee80a3ab52cc2?family=Feather+Bold"></script> <!--Importando fontes-->
    <!--Importando estilizações-->
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="icon" href="img/Playnacozinha.jpg"> <!--Logo-Guia d.navegação-->
    <title>Play na Cozinha</title> <!--Título-Guia d.navegação-->
</head>

<!--Corpo-->
<body>

    <div class="login-container"> <!--Divisão-Formulário login-->
        <form id="form-login" method="POST"> <!--Formulário-->
            <img id="logo" src="img/Playnacozinha.jpg"> <!--Imagem-->
            <h1>Login</h1> <!--Título-Formulário-->

            <label for="nomeUsuario">Nome de usuário</label> <!--Rótulo-Campo d.preenchimento-->
            <input type="text" name="nomeUsuario" placeholder="Coloque seu nome" required> <!--Campo d.preenchimento-->

            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Coloque sua senha" maxlength="8" required>

            <button type="submit" name="logar">Logar</button> <!--Botão-->

            <div class="links"> <!--Divisão-Links Redirecionaveis-->
                <a href="../view/cadastro.php">Criar uma conta</a> <!--Direciona à pág.Cadastro-->
            </div>
        </form>
    </div>

</body>
</html> <!--Fim d.Pág-->