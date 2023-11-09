<!DOCTYPE html> <!--Documento HTML-->
<html lang="pt-BR"> <!--Página em Português-BR-->

<head> <!--Cabeça-Funções internas-->
    <meta charset="UTF-8"> <!--Caractéres especiais-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Proporção p.diferentes dimensões d.telas-->
    <!--Importando estilizações-->
    <link rel="stylesheet" href="../public/CSS/normalize.css">
    <link rel="stylesheet" href="../public/CSS/home.css">
    <link rel="icon" href="../public/img/Playnacozinha.jpg"> <!--Logo-Guia d.navegação-->
    <title>Play na Cozinha</title> <!--Título-Guia d.navegação-->
</head>

<!--Corpo-->
<body>

<!--Cabeçalho-->
<header>
<div class="socialcontact"> <!--Divisão-Contatos sociais-->

    <nav> <!--Barra d.navegação-->
        <img id="logo" src="../public/img/Playnacozinha.jpg" alt="Logo"> <!--Imagem-->
        <a href="perfil.php"><img id="logoPerfil" src="../public/img/perfil.png" alt="perfil" class="perfil"></a>

        <ul><!--Lista simples-->
            <li><a href="#sobre" class="botao">Sobre</a></li>
            <li><a href="bolos.php">Bolos</a></li> <!--Direcíona p.'bolos.php'-->
            <li><a href="sobremesas.php">Sobremesas</a></li>
            <li>
                <div class="container">
                    <a class="toggle-buttonSalgados">Salgados</a>
                    <div class="opcoesSalgados">
                        <a id="assados" href="assados.php">Assados</a>
                        <a id="fritos" href="fritos.php">Fritos</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="container">
                    <a class="toggle-buttonBebidas">Bebidas</a>
                    <div class="opcoesBebidas">
                        <a id="alcolicas" href="alcolicas.php">Alcolicas</a>
                        <a id="geladas" href="geladas.php">Geladas</a>
                        <a id="quentes" href="quentes.php">Quentes</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="container">
                    <a class="toggle-buttonDiversificados">Diversificados</a>
                    <div class="opcoesDiversificados">
                        <a id="fitness" href="fitness.php">Fitness</a>
                        <a id="veganos" href="veganos.php">Veganos</a>
                        <a id="glutens" href="glutens.php">Glutens</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>

<!--Principal-->
<main>
    <section id="sobre">
    <section class="popular-recipes">
        <h2>Sobre</h2>

        <h2> Nossa História</h2>
        <p>Nossa jornada começou há mais alguns meses, com uma paixão compartilhada por cozinhar 
        decidiu criar um espaço onde pudessem compartilhar isso com voces.
        O que começou como um hobby logo se transformou em um projeto mais ambicioso, à 
        medida que compartilhávamos nossas receitas favoritas com amigos e familiares. Hoje, o 
        Play na Cozinha é uma comunidade global de amantes da culinária que se reúnem para 
        explorar, experimentar e celebrar o mundo da comida.</p><br>

        <h2>Nossa Missão</h2>
        <p>Na Play na Cozinha, nossa missão é inspirar e capacitar vocês na cozinha. 
        Queremos tornar a culinária acessível a todos, desde iniciantes até chefs experientes. 
        Acreditamos na importância de ingredientes frescos e saudáveis, e nosso objetivo é mostrar 
        como a culinária pode ser uma jornada divertida e deliciosa para todos.
        Aqui no Play na Cozinha, adoramos explorar os sabores do mundo. Nossa abordagem é 
        abraçando tanto pratos tradicionais quanto experimentos criativos na cozinha.</p><br>

        <h2>Ha voces nossa Comunidade</h2>
        <p>Nossa comunidade é o coração do Play na Cozinha. Adoramos ver nossos leitores 
        compartilhando suas experiências, adaptando nossas receitas e criando suas próprias 
        obras-primas culinárias. Fique à vontade para participar dos comentários, compartilhar 
        suas fotos e histórias, e se conectar conosco nas redes sociais.</p><br>
    </section> 

    <section class="contact"> <!--Espaço d.Contatos-->
        <h2>Contato</h2>
            <p>Venha conhecer nossos serviços!</p> <!--Texto-->

            <div class="socialcontact"> <!--Divisão-Contatos sociais-->
                <div class="whats"> <!--Divisão-Whatsapp-->
                    <img src="../public/img/WhatsappAltern.png" alt="Whatsapp">
                    <p><a href="tel:41984726882">(41)98472-6882</a></p>
                </div>

                <div class="email"> <!--Divisão-E-mail-->
                    <img src="../public/img/E-mailAltern.png" alt="E-mail">
                    <p><a href="mailto:Plauy.na.cozinha@gmail.com">Playnacozinha@gmail.com</a></p>
                </div>

                <div class="instagram"> <!--Divisão-Instagram-->
                    <img src="../public/img/instagram.png" alt="Instagram">
                    <p><a hrefs="www.instagram.com.br">Play_na_cozinha</a></p>
                </div>
            </div>
    </section>
</main>

<!--Rodapé-->
<footer>
        <p>&copy; 2023 - Desenvolvido por Play na cozinha</p>
</footer>

<script src="../public/JS/script.js"></script>

</body>
</html> <!--Fim d.Pág-->