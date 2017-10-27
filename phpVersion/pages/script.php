<?php


$totalPoints = 0;
 //Question 1 : La série est tournée en Irlande, Croatie et Islande.

if(isset($_GET['Q1a']) && isset($_GET['Q1b']) && !isset($_GET['Q1c']) && isset($_GET['Q1d'])) {
  $totalPoints ++;
}


//Question 2 : G.R.R. Martin a écrit la saga Le Trône de fer.
isset($_GET["Q2"]) && $_GET['Q2'] == "1"? $totalPoints ++ : $totalPoints += 0 ;


//Question 3 :Le bâtard de Ned Stark s'appelle Jon Snow.
$_GET["Q3"] = strtolower($_GET["Q3"]);
if($_GET['Q3'] == "jon" | $_GET['Q3'] == "jon snow" | $_GET['Q3'] == "snow") {
  $totalPoints ++;

}

//Question 4 : Le roman français qui a inspiré l'auteur est Les Rois maudits, de Maurice Druon.
isset($_GET["Q4"]) && $_GET['Q4'] == "1"? $totalPoints ++ : $totalPoints += 0 ;


//Question 5 : Les dragons de Daenerys s'appellent Viserion, Drogon et Rhaegal.
if(isset($_GET['Q5a']) && !isset($_GET['Q5b']) && isset($_GET['Q5c']) && isset($_GET['Q5d'])) {
  $totalPoints ++;
}

//Question 6 : L'épée d'Arya s'appelle Aiguille.
isset($_GET["Q6"]) && $_GET['Q6'] == "1"? $totalPoints ++ : $totalPoints += 0 ;


//Question 7 : Le vrai père de Joffrey Baratheon est son oncle Jamie.
isset($_GET["Q7"]) && $_GET['Q7'] == "1"? $totalPoints ++ : $totalPoints += 0 ;


//Question 8 : La devise de la maison Lannister est Je rugis.
isset($_GET["Q8"]) && $_GET['Q8'] == "1"? $totalPoints ++ : $totalPoints += 0 ;


//Question 9 : Peter Dinklage a joué dans Nip Tuck et Entourage.
if(!isset($_GET['Q9a']) && isset($_GET['Q9b']) && !isset($_GET['Q9c']) && isset($_GET['Q9d'])) {
  $totalPoints ++;
}

//Question 10 : Le nombre de saisons diffusées est de 7.
if($_GET['Q10'] == "7") {
  $totalPoints ++;
}

//Question 11 : Le nombre de morts dans les trois premières saisons est de 5179.
isset($_GET["Q11"]) && $_GET['Q11'] == "1"? $totalPoints ++ : $totalPoints += 0 ;



if ($totalPoints == 11) {
  echo "<p>Votre score est de " . $totalPoints . " points. Bravo vous êtes incollable.</p>";
} elseif ($totalPoints == 7 | $totalPoints == 8 | $totalPoints == 9 | $totalPoints == 10) {
  echo "<p>Votre score est de " . $totalPoints . " points. Bravo c'est pas mal.</p>";
}
elseif ($totalPoints == 3 | $totalPoints == 4 | $totalPoints == 5 | $totalPoints == 6) {
  echo "<p>Votre score est de " . $totalPoints . " points. Vous n'êtes pas très bon.</p>";
}
elseif ($totalPoints == 0 | $totalPoints == 1) {
  echo "<p>Votre score est de " . $totalPoints . " point. Vous êtes médiocre.</p>";
}
else {
  echo "<p>Votre score est de " . $totalPoints . " points. Vous êtes médiocre.</p>";
}
