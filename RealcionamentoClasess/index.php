<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealcionamentoClasess</title>
    <link rel="stylesheet" href="/Styles/style.css">
</head>

<body>
    <pre>
    <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $lutadores = array();
        $lutadores[0] = new Lutador("michel",   "brasil", 32, "1.76", 80,     12, 5, 3);
        $lutadores[1] = new Lutador("Joao",     "grecia", 29, "1.68", 57.8,   11, 2, 1);
        $lutadores[2] = new Lutador("tommy",    "usa",    39, "1.65", 80.9,   18, 5, 5);
        $lutadores[3] = new Lutador("layla",    "franca", 22, "1.93", 81.6,   13, 0, 3);
        $lutadores[4] = new Lutador("alfredo",  "india",  26, "1.56", 119.2,  5,  2, 1);
        $lutadores[5] = new Lutador("nerd",     "japao",  31, "1.55", 105.7,  12, 5, 3);
        
        //$lutadores[0]->apresentar();
        echo "<br> --------------------------- Luta 01 --------------------------- ";
        $uec01 = new Luta();
        $uec01->marcarLuta($lutadores[0], $lutadores[2]);
        $uec01->lutar();
        $lutadores[0]->status();
        $lutadores[2]->status();
        echo "<br> --------------------------- Luta 02 --------------------------- ";
        $uec02 = new Luta();
        $uec02->marcarLuta($lutadores[3], $lutadores[1]);
        $uec02->lutar();
        $lutadores[3]->status();
        $lutadores[1]->status();
        echo "<br> --------------------------- Luta 03 --------------------------- ";
        $uec03 = new Luta();
        $uec03->marcarLuta($lutadores[4], $lutadores[5]);
        $uec03->lutar();
        $lutadores[4]->status();
        $lutadores[5]->status();
        echo "<br> --------------------------- Luta 04 --------------------------- ";
        $uec04 = new Luta();
        $uec04->marcarLuta($lutadores[3], $lutadores[0]);
        $uec04->lutar();
        $lutadores[3]->status();
        $lutadores[0]->status();
    ?>
    </pre>
</body>

</html>