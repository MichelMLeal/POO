<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>

<body>
    <pre>
    <h1>Inferfaces PHP</h1>
    <?php   
        require_once 'ControleRemoto.php';
        $controle = new ControleRemoto();
        //$controle->ligar();
        $controle->maisVolume(16);
        $controle->menosVolume(0);
        $controle->ligarMudo();
        $controle->desligarMudo();
        $controle->play();
        $controle->pause();
        $controle->abrirMenu();
        $controle->desligar();
        $controle->fecharMenu();

    ?>
    </pre>
</body>

</html>