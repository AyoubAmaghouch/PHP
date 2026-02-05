<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

  //Trim spaces

$nom =  trim($_POST['nom']);
$note1 = trim($_POST['note1']);
$note2 =  trim($_POST['note2']);
$note3 = trim($_POST['note3']);

// Store the marks in an array
$notes = [$note1 , $note2 , $note3];


// Check if any field is empty

if(empty($nom) || empty($note1) || empty($note2) || empty($note3)){

  echo 'Please fill in all fields';

}


// Check if any of the marks is invalid (not between 0 and 20)


foreach($notes as $note){

if($note < 0 || $note >20){
    echo '  One of the marks is invalid '.'<br>' ; 
 } 
}


// Calculate the average of the marks in the array
function calculerMoyenne($notes) {
  $summe = array_sum($notes);
  $moyenne = $summe / count($notes);
  return $moyenne;
}



// Function to display the student's details and the corresponding mention based on the average

 function getMention($moyenne) {

    global $nom;
    global $note1;
    global $note2;
    global $note3;

// Display the student's name and marks

    echo 'le nom :'.' '.$nom.'<br>';
    echo 'note1 :'.' '.$note1.'<br>';
    echo 'note2 :' .' '.$note2.'<br>';
    echo 'note3 :' .' '.$note3.'<br>';
    echo 'moyenne :'.' '.$moyenne .'<br>';
   
   
    // Display the mention according to the average

    if($moyenne < 10){
        echo 'You failed';
    } elseif($moyenne < 14){
        echo 'Pass';
    } elseif($moyenne < 17){
        echo 'Good';
    } else {
        echo 'Very Good';
    }


}
// Calculate the average using the calculerMoyenne function

$moyenne = calculerMoyenne($notes);

// Call getMention to display the results

getMention($moyenne);
}



























?>