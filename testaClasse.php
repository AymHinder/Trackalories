<!DOCTYPE html>

<html lang="fr">
<head>
   <meta charset="utf-8">
   <title>Calcul IMC</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

   <div class="container light-red">
   <div class="m-auto">
   <center>

    <?php
    //include 'imc.class.php';
    $calcul = new CalculIMC();

    $taille = $calcul->test_input($_POST['Taille']); 
    $poids = $calcul->test_input($_POST['Poids']);

    echo $calcul->CalcIMC($poids, $taille);

    class CalculIMC
    {
        public $taille; // Création objet taille
        public $poids; // Création objet poids
        
    function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        
        function CalcIMC($poids,$taille)
        {
            
            $imc = ($poids / (pow($taille,2))); // Formule de calcul IMC
            echo "<h1>Votre bilan : </h1>";
            echo "<br><h5>Votre IMC est à ".$imc;
            echo "</h5>";

            // Résultat du test IMC

            if ($imc > 40){
                echo "<br><h5>Vous êtes en obésité morbide</h5>";
            }elseif ($imc > 35){
                echo "<br><h5>Vous êtes en obésité sévère</h5>";
            }elseif ($imc > 30){
                echo "<br><h5>Vous êtes en obésité modérée</h5>";
            }elseif ($imc > 25){
                echo "<br><h5>Vous êtes en surpoids</h5>";
            }elseif ($imc > 18.5){
                echo "<br><h5>Vous êtes à votre poids normal</h5>";
            }elseif ($imc > 16.5){
                echo "<br><h5>Vous êtes en maigreur</h5>";
            }else{
                echo "<br><h5>Vous êtes en dénutrition</h5>";
            }

        }

    }
    ?>
    </center>
    </div>
    </div>
</body>
</html>
