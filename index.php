<html>
    <head>
        <title>Test CI/CD</title>
    </head>
<body>
<?php
    echo '<h1>Bonjour, monde!</h1><br>';

    class Vehicule {
        public $vitesse = 420;
    }

    function checkVitesse(Vehicule $veh) {
        if ($veh->vitesse > 100)
            echo "rapide";
    }

    $v = new Vehicule;
    checkVitesse($v);
?>
</body>
</html>