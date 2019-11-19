<?php
header("Content-type:text/html; charset=utf8");

require_once "Classes/Alunos.php";

$alunos = new Alunos();
$listarAlunos = $alunos->listarTodos();

if(isset($_GET["matricula"])) {
    $dadosAlunos = $alunos->listarID($_GET["matricula"]);
}

if(isset($_POST["Salvar"])){
    $alunos->inserir();
}

if(isset($_GET["matricula"])){
    $alunos->excluir($_GET["matricula"]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="index_adm.php">Painel Administrativo</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index_alunos.php">Alunos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_professores.php">Professores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_funcionarios.php">Funcionários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_cursos.php">Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_disciplinas.php">Disciplinas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Sair</a>
        </li>
    </ul>
</nav>


<div class="container lista">
    <div class="row">
        <div class="col-md-11">
            <h3>Lista de Alunos</h3>
        </div>
        <div class="col-md-1">
            <a href="cadastrar_aluno.php" class="btn btn-outline-primary"><img src="img/icon/new.png"></a>
        </div>
    </div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Telefone</th>
            </tr>
        </thead>

        <tbody>

            <?php if($listarAlunos) :
                foreach ($listarAlunos as $aluno) : ?>

            <tr>
                <td><?php echo $aluno->MATRICULA; ?></td>
                <td><?php echo $aluno->NOME; ?></td>
                <td><?php echo $aluno->SEXO; ?></td>
                <td><?php echo $aluno->EMAIL; ?></td>
                <td><?php echo $aluno->ENDERECO; ?></td>
                <td><?php echo $aluno->TELEFONE; ?></td>
                <td>
                    <a class="btn btn-outline-warning" href="alterar_aluno.php?matricula=<?php echo $aluno->MATRICULA; ?>"><img src="img/icon/edit.png"></a>
                    <a class="btn btn-outline-danger" href="index_alunos.php?matricula=<?php echo $aluno->MATRICULA; ?>"><img src="img/icon/delete.png"></a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Nenhum aluno encontrado</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>