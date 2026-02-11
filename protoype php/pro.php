<?php


function calculerMoyenne($notes) { 

    return array_sum($notes) / count($notes);
}

function getMention($moyenne) {
    if ($moyenne >= 16) return "Très Bien";
    elseif ($moyenne >= 14) return "Bien";
    elseif ($moyenne >= 12) return "Assez Bien";
    elseif ($moyenne >= 10) return "Passable";
    elseif ($moyenne >= 7) return "rattrapage" ;
    else return "domage";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
//champ VARIABLE 
$nom = $_POST['nom'];
$note1 = $_POST['note1'];
$note2 = $_POST['note2'];
$note3 = $_POST['note3'];



    if ($nom === "" || $note1 === "" || $note2 === "" || $note3 === "")
     {
        echo "<p class='error'>Tous les champs sont obligatoires.</p>";
        exit;
    }

    $nom = trim($_POST['nom']);
    $notes = [
        trim($_POST['note1']),
        trim($_POST['note2']),
        trim($_POST['note3'])
    ];

  for ($i = 0; $i < count($notes); $i++) {
    $n = $notes[$i];
    if (!is_numeric($n) || $n < 0 || $n > 20) {
        echo "<p class='error'>Les notes doivent être entre 0 et 20.</p>";
        exit;
    }
}

    $moyenne = calculerMoyenne($notes);
    $mention = getMention($moyenne);

    echo "<link rel='stylesheet' href='pro.css'>";
    echo "<div class='box result'>";
    echo "Étudiant: <b>$nom</b><br>";
    echo "Moyenne: " . round($moyenne, 2) . "<br>";
    echo "Mention: <b>$mention</b>";
    echo "</div>";
}
?>