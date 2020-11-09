<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3159f8103a.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="content first-content">
        <div class="first-column">
            <h2 class="title text-white">Seja Bem Vindo!</h2>
            <p class="description text-white">Mantenha-se conectado</p>
            <p class="description text-white">Faça login com sua conta</p>
            <button id="signin" class="btn btn-purple">LOGIN</button>
        </div> <!--Final da primeira coluna-->
        <div class="second-column">
            <h2 class="title text-purple">Crie sua conta</h2>
            <div class="social-media">
                <ul class="item-socialMedia">
                    <a href="#"><li><i class="fab fa-github-alt"></i></li></a>
                    <a href="#"><li><i class="fab fa-google"></i></li></a>
                    <a href="#"><li><i class="fab fa-twitter"></i></li></a>
                </ul>
            </div><!--Final das redes sociais-->
            <p class="description text-grey">Ou faça seu registro</p>
            <form action="" class="form">
                <label for="nome"><i class="far fa-user"></i><input type="text" name="nome" id="nome" placeholder="Nome"></label>
                <label for="email"><i class="far fa-envelope"></i><input type="email" name="email" id="email-criar" placeholder="seu.email@email.com"></label>
                <label for="password"><i class="fas fa-key"></i><input type="password" name="password" id="password-criar"  placeholder="&#9679 &#9679 &#9679 &#9679 &#9679 &#9679"></label>                
                <label for="confPassword"><i class="fas fa-key"></i><input type="password" name="confPassword" id="confPassword"  placeholder="&#9679 &#9679 &#9679 &#9679 &#9679 &#9679"></label>
                <button class="btn btn-white">Criar conta</button>          
            </form>
        </div><!--Final da segunda coluna-->
    </div> <!--Final do primeiro container-->
    <div class="content second-content">
        <div class="first-column">
            <h2 class="title text-white">Olá, Tudo bom?</h2>
            <p class="description text-white">Mantenha-se conectado</p>
            <p class="description text-white">Que tal criarmos uma conta?</p>
            <button id="signup"  class="btn btn-purple">CRIAR CONTA</button>
        </div> <!--Final da primeira coluna-->
        <div class="second-column">
            <h2 class="title text-purple">Bem Vindo! Faça login</h2>
            <div class="social-media">
                <ul class="item-socialMedia">
                    <a href="#"><li><i class="fab fa-github-alt"></i></li></a>
                    <a href="#"><li><i class="fab fa-google"></i></li></a>
                    <a href="#"><li><i class="fab fa-twitter"></i></li></a>
                </ul>
            </div><!--Final das redes sociais-->
            <p class="description text-grey">Ou insira seus dados</p>
            <form class="form"  action="login.php" method="POST">
                <label for="email"><i class="far fa-envelope"></i><input type="email" name="email" id="email" placeholder="seu.email@email.com"></label>
                <label for="password"><i class="fas fa-key"></i><input type="password" name="password" id="password"  placeholder="&#9679 &#9679 &#9679 &#9679 &#9679 &#9679"></label>
                <a class="description text-grey" href="#">Esqueci minha senha</a>             
                <button class="btn btn-white">Entrar</button>
            </form>
    </div>
</div><!--Final do segundo container-->

<script src="js/app.js"></script>
</body>
</html>