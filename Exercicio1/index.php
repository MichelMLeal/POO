<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
    <link rel="stylesheet" href="/Styles/style.css">
    <script src="/JavaScript/script.js"></script>
</head>

<body>
    <pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';
    $pessoa[0] = new Pessoa("michel", 32, "M");
    $pessoa[1] = new Pessoa("layla", 22, "F");

    $livro[0] = new Livro("PHP basico", "Mario", 300, $pessoa[0]);
    $livro[1] = new Livro("PHP Poo", "Jao", 500, $pessoa[0]);
    $livro[2] = new Livro("PHP Avancado", "Tommy", 800, $pessoa[1]);
    
    echo "<br> Nome: ".$pessoa[0]->getNome();
    echo "<br> Titulo: ".$livro[0]->getTitulo();
    echo $livro[0]->abrir();
    echo $livro[0]->folhear(12);
    echo $livro[0]->avancarPagina();
    echo $livro[0]->avancarPagina();
    echo $livro[0]->avancarPagina();
    echo $livro[0]->avancarPagina();
    echo $livro[0]->avancarPagina();
    echo $livro[0]->voltarPagina();

    ?>
    </pre>
</body>

</html>