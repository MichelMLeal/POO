<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herença</title>
    <link rel="stylesheet" href="/Styles/style.css">
</head>

<body>
    <pre>
    <?php 
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Funcionario.php';
    require_once 'Professor.php';

    $pessoa = new Pessoa();
    $aluno = new ALuno();
    $funcionario = new Funcionario();
    $professor = new Professor();

    $pessoa->setNome('Michel');
    $pessoa->setSexo('M');
    $pessoa->setIdade(33);

    $aluno->setNome('Joao');
    $aluno->setSexo('M');
    $aluno->setIdade(16);
    $aluno->setMatricula(true);
    $aluno->setCurso('Informatica');
    $aluno->cancelarMatricula();

    $funcionario->setNome('Paula');
    $funcionario->setSexo('F');
    $funcionario->setIdade(31);
    $funcionario->setSetor('Estoque');
    $funcionario->mudarTrabalho();

    $professor->setNome('tavares');    
    $professor->setSexo('M');
    $professor->setIdade(33);
    $professor->setEspecialidade('Matematica');
    $professor->setSalario(2500.8);  
    $professor->receberAumento(550.6);
    
    


    print_r($pessoa);
    print_r($aluno);
    print_r($funcionario);
    print_r($professor);


    
    ?>
    </pre>
</body>

</html>