<?php
    require_once('../action/Contas.php');
    require_once('../database/conexao.php');

    $database = new Conexao();
    $db = $database->getConnection();
    $contas = new Contas($db);

    if(isset($_POST['cadastrar'])){
        $nomeUsuario = $_POST['nomeUsuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];

        $limiteSenha = 8;

        if (strlen($senha) >= $limiteSenha) {
            if($contas->cadastrar($nomeUsuario,$email,$senha,$confSenha)){
                print "<script>alert('Cadastro efetuado com sucesso!')</script>";
            }else{
                print "<script>alert('A senha deve ter no mínimo 8 digitos!')</script>";
            }
        }
    }
?>
<!DOCTYPE html> <!--Documento HTML-->
<html lang="pt-BR"> <!--Página em Português-BR-->

<head> <!--Cabeça-Funções internas-->
    <meta charset="UTF-8"> <!--Caractéres especiais-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Proporção p.diferentes dimensões d.telas-->
    <script type="text/javascript" src="https://db.onlinewebfonts.com/s/14936bb7a4b6575fd2eee80a3ab52cc2?family=Feather+Bold"></script> <!--Importando fontes-->
    <link rel="stylesheet" href="../public/CSS/normalize.css"> <!--Importando estilizações-->
    <link rel="stylesheet" href="../public/CSS/cadastro.css">
    <link rel="icon" href="../public/img/Playnacozinha.jpg"> <!--Logo-Guia d.navegação-->
    <title>Play na Cozinha</title> <!--Título-Guia d.navegação-->
</head>

<!--Corpo-->
<body>
    <div class="registro-container"> <!--Divisão-Formulário login-->
        <form id="form-registro" method="POST"> <!--Formulário-->
            <img id="logo" src="../public/img/Playnacozinha.jpg"> <!--Imagem-->
            <h1>Faça seu cadastro</h1> <!--Título-Formulário-->

            <label for="nomeUsuario">Nome de usuário</label> <!--Rótulo-Campo d.preenchimento-->
            <input type="text" name="nomeUsuario" placeholder="Crie um nome de usuário" required> <!--Campo d.preenchimento-->

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Informe seu e-mail" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Crie uma senha" maxlength="8" required>

            <label for="confSenha">Confirmar senha</label>
            <input type="password" name="confSenha" placeholder="Confirme sua senha" maxlength="8" required>

            <button type="submit" name="cadastrar">Cadastrar</button>

            <div class="links"> <!--Divisão-Links Redirecionaveis-->
                <a href="../public/index.php">Voltar para o login</a> <!--Direciona à pág.Index-->
            </div>
        </form>
    </div>

</body>
</html> <!--Fim d.página-->