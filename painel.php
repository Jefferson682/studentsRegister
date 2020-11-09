<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/painel.css">
    
    <title>Painel-Projeto</title>
</head>
<body>
    <div class="container">
        <header class="conteudo header">
            <h1>Olá <?php echo $_SESSION['email'];?></h1>
            <a class="description text-grey" href="logout.php">sair</a>
        </header>

        <section class="conteudo dados">
            <h2 class="title text-purple">Situação dos alunos</h2>
            <h3>x estão aprovados por média</h3>
            <h3>x estão em recuperação</h3>
            <h3>x estão reprovados</h3>
        </section>

        <section class="conteudo add">
            <div class="img">
                <img src="img/student-png.png" alt="icone cadastro">
            </div>
            <div class="formulario">
                <h2 class="title text-purple">Cadastro de novo aluno</h2>
            <form action="" class="form">
                <h3 class="title-form">Nome completo:</h3>
                <label for="nome">
                    <input type="text" name="nome" id="nome" maxlength="40" placeholder="Nome">
                </label>
                <h3 class="title-form">E-mail:</h3>
                <label for="email">
                    <input type="email" name="email" id="email" maxlength="50" placeholder="Email">
                </label>
                <h3 class="title-form">Telefone :</h3>
                <label for="tel">
                    <input type="tel" name="tel" id="tel" maxlength="9" placeholder="999999999">
                </label>
                <h3 class="title-form">Notas:</h3>
                <div class="notas">
                <label for="n1">
                    <input type="number" name="n1" id="n1" placeholder="9.9" max=10>
                </label>
                <label for="n2">
                    <input type="number" name="n2" id="n2" placeholder="9.9" max=10>
                </label>
                <label for="n3">
                    <input type="number" name="n3" id="n3" placeholder="9.9" max=10>
                </label>
                </div>
                <button class="btn btn-white">Cadastrar</button>
            </form>    
            </div>
            
        </section>
        <section class="conteudo tabela">
            <h2 class="title text-purple">Alunos Cadastrados</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Primeiro</th>
                    <th scope="col">Último</th>
                    <th scope="col">Nickname</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </section>

    </div>
    
</body>
</html>