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
    require_once 'Aluno.php';
    require_once 'Bolsista.php';

    $aluno = new ALuno();
    $bolsista = new Bolsista();
    
    $aluno->setNome('Joao');
    $aluno->setSexo('M');
    $aluno->setIdade(16);
    $aluno->setMatricula(1234);
    $aluno->setCurso('Informatica');
    $aluno->pagarMensalidade();

    print_r($aluno);

    $bolsista->setNome('Carolina');
    $bolsista->setSexo('F');
    $bolsista->setIdade(21);
    $bolsista->setMatricula(2563);
    $bolsista->setCurso('Arquitetura');
    $bolsista->setBolsa('Sim');
    $bolsista->pagarMensalidade();
    $bolsista->renovarBolsa();

    
    print_r($bolsista);
    
    ?>
    </pre>
</body>

</html>