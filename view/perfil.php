<?php
require_once('../action/Contas.php');
require_once('../database/conexao.php');

$database = new conexao ();
$db = $database->getConnection();
$contas = new Contas($db);

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nomeUsuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confSenha'];

    $limiteSenha = 8;

    if (strlen($senha) >= $limiteSenha) {
        if ($contas->cadastrar($nomeUsuario, $email, $senha, $confSenha)) {
            print "<script>alert('Cadastro efetuado com sucesso!')</script>";
        } else {
            print "";
        }
    } else {
        print "<script>alert('A senha deve ter no mínimo 8 caracteres')</script>";
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
    <div class="perfil-container"> <!--Divisão-Formulário login-->
        <form id="form-perfil" method="POST"> <!--Formulário-->
            <img id="logo" src="../public/img/Playnacozinha.jpg"> <!--Imagem-->
            <h1>Editar seu perfil</h1>

            <label for="nomeUsuario">Nome do usuário</label>
            <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Atualize seu nome">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Atualize seu e-mail">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Atualize sua senha" maxlength="8">

            <a href="../view/home.php">Salvar alterações</a>
        </form>
    </div>
    <script>
        // Função para atualizar os dados do usuário (simulada)
        function projeto(formData) {
            // Você pode enviar os dados para o servidor aqui
            console.log("Dados do usuário atualizados:", formData);
        }

        // Carregar os dados do usuário ao carregar a página
        window.onload = function () {
            projeto();

            // Lidar com a submissão do formulário
            document.getElementById("form-perfil").addEventListener("submit", function (event) {
                event.preventDefault(); // Impede o envio padrão do formulário

                // Obter os dados do formulário
                const formData = {
                    nome: document.getElementById("nomeUsuario").value,
                    email: document.getElementById("email").value,
                    senha: document.getElementById("senha").value
                };

                // Atualizar os dados do usuário (simulado)
                projeto(formData);
            });
        };
    </script>
    <a href="../view/home.php">voltar para inicio</a>
</body>
</html>