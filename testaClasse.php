<?php
include 'imc.class.php';
$calcul = new CalculIMC();

$taille = $calcul->test_input($_POST['Taille']); 
$poids = $calcul->test_input( $_POST['Poids']);

echo $calcul->CalcIMC($poids, $taille);

class CalculIMC
{
    public $taille = 1;
    public $poids = 0;
    
   function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    
    function CalcIMC($poids,$taille)
    {
           
        $imc = ($poids / (pow($taille,2)));
        echo "Votre IMC est à ".$imc;

        if ($imc > 40){
            echo "<br>Vous êtes en obésité morbide";
        }elseif ($imc > 35){
            echo "<br>Vous êtes en obésité sévère";
        }elseif ($imc > 30){
            echo "<br>Vous êtes en obésité modérée";
        }elseif ($imc > 25){
            echo "<br>Vous êtes en surpoids";
        }elseif ($imc > 18.5){
            echo "<br>Vous êtes à votre poids normal";
        }elseif ($imc > 16.5){
            echo "<br>Vous êtes en maigreur";
        }else{
            echo "<br>Vous êtes en dénutrition";
        }

        
        //return $imc;
    }

}
