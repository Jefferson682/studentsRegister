<?php
include('verifica_login.php');
include('funcao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/painel.css">
    <script src="js/functions.js"></script>
    
    <title>Painel-Projeto</title>
</head>
<body>
    <div class="container">
        <header class="conteudo header">
            <h1>Olá <?php echo $_SESSION['email'];?></h1>
            <a class="description text-grey" href="logout.php">sair</a>
        </header>

        <section class="conteudo add">
            <div class="img">
                <img src="img/student-png.png" alt="icone cadastro">
            </div>
            <div class="formulario">
                <h2 class="title text-purple">Cadastro de novo aluno</h2>
                    <form id="cadAluno" method="POST" action="funcao.php" class="form">
                    <!-- Dados de controle -->
                        <input type="hidden" id="codAluno" name="codAluno" value="<?=$_POST['codAluno']?>" size="3"/>        
                        <input type="hidden" id="acao" name="acao" value="<?=$_POST['acao']?>" size="10"/>        
                        <!-- Dados de controle -->
                        <h3>CADASTRO DE ALUNOS</h3>            
                        <label for="nome">
                        <input type="text" placeholder="Nome Completo" require id="nome" name="nome" value="<?=$nome?>"/>
                        </label>
                        <label for="email">
                        <input type="text" placeholder="E-mail" require id="email" name="email" value="<?=$email?>"/>
                        </label>
                        <label for="celular"> 
                        <input type="text" placeholder="84 9999.9999" require id="celular" name="celular" value="<?=$celular?>"/>
                        </label>
                        <button class="btn btn-white" type="button" onclick="salvar()">Salvar</button>
                        <button class="btn btn-white" type="button" onclick="limpar()">Limpar</button> 
                    </form>
                <p id="mensagem"></p>
            </div>
            
        </section>
        <section class="conteudo tabela">
            <h2 class="title text-purple">Alunos Cadastrados</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php echo($lista) ?>
                </tbody>
              </table>
        </section>

    </div>
    
</body>
</html>