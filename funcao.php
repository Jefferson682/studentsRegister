    <?php
    include('conexao.php');
    
    //Variaveis globais
    $nome = "";
    $email = "";
    $celular = "";

    function listar($conexao){
        global $lista;
        $lista = '';
        //lista dos dados da tabela de alunos do banco escola
        if($result = $conexao->query("select * from alunos")){
            while($row = $result->fetch_row()){
                $lista = $lista.'<tr class="coluna">';
                $lista = $lista.'<td class="linha">'.utf8_encode($row[1]).'</td>';
                $lista = $lista.'<td class="linha">'.utf8_encode($row[2]).'</td>';
                $lista = $lista.'<td class="linha">'.utf8_encode($row[3]).'</td>';
                $lista = $lista.'<td class="linha">';
                $lista = $lista.'<button  class="btn btn-white" type="button" onclick="editar('.$row[0].')">EDITAR</button>';
                $lista = $lista.'&nbsp;';
                $lista = $lista.'<button  class="btn btn-white" type="button" onclick="excluir('.$row[0].')">EXCLUIR</button>';
                $lista = $lista.'</td>';
                $lista = $lista.'<tr>';
            }
        }else{
            echo("Nenhum resgistro encontrado");
        } 
    }
    //$conexao É UMA VARIAVEL DA FUNÇÃO SALVAR
    //TEM QUE PASSAR A CONEXÃO PARA A FUNÇÃO PODER UTLIZAR NA EXECUÇÃO DA QUERY
    function salvar($conexao){
        
        if(!isset($_POST["nome"]) || $_POST["nome"] == null){
            die("Campo nome inválido!!!");
        }else{
            $nome = $_POST["nome"];
        }
        if(!isset($_POST["celular"]) || $_POST["celular"] == null){
            die("Campo telefone inválido!!!");
        }else{
            $celular = $_POST["celular"];
        }
        if(!isset($_POST["email"]) || $_POST["email"] == null){
            die("Campo e-mail inválido!!!");
        }else{
            $email = $_POST["email"];
        }

        //echo("Nome: ".$nome);
        //echo("Celular: ".$celular);
        //echo("E-mail: ".$email);
        //SE PASSOU NA VALIDAÇÃO, DEVE SER EXECUTADA A QUERY DE INSERT DOS DADOS.
        if($_POST['codAluno'] == ''){
            $sql = "insert into alunos (nome,celular,email)";
            $sql = $sql . " values ('".$nome."','".$celular."','".$email."')";
        }else{
            $sql = "update alunos set ";
            $sql = $sql . " nome = '". $nome ."',";
            $sql = $sql . " celular = '". $celular ."',";
            $sql = $sql . " email = '". $email ."'";
            $sql = $sql . " where id = ". $_POST['codAluno'];
        }

        $result = $conexao->query($sql);
        if($result){
            echo "<script>alert('Dados Salvos com Sucesso!');</script>";

        }
    }

    function encontrar($conexao){
        global $nome, $email, $celular;
        if($result = $conexao->query("select * from alunos where id = ".$_POST['codAluno'])){
            $row = $result->fetch_row();
            $nome = utf8_encode($row[1]);
            $email = utf8_encode($row[2]);
            $celular = utf8_encode($row[3]);
        }else{
            echo "<script>alert('Aluno não encontrado!');</script>";
        } 
    }    

    function excluir($conexao){
        if($_POST['codAluno'] != ''){
            $sql = "delete from alunos where id = ". $_POST['codAluno'];
            $result = $conexao->query($sql);
            if($result){
                echo "<script>alert('Dados Excluidos com Sucesso!');</script>";
            } 
        }else{
            echo("ALUNO NÃO ENCONTRADO!!!");
        }       
    }

    // VERIFICA SE OS DADOS FORAM SUBMETIDOS PELO (method="POST") NO FORMULÁRIO
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch ($_POST['acao']) {
            case 'SALVAR':
                salvar($conn);
                break;
            case 'EDITAR':
                encontrar($conn);
                break;    
            case 'EXCLUIR':
                excluir($conn);
                break;                         
        }
    }

    listar($conn);
    mysqli_close($conn);
