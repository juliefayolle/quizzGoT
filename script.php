<?php


$totalPoints = 0;
 //Question 1
if($_GET['Q1a'] == "1" && $_GET['Q1b'] == "1" && $_GET['Q1c'] == NULL && $_GET['Q1d'] == "1") {
  echo "Q1 : C'est bon. La série est tournée en Irlande, Croatie et Islande.<br>";
  $totalPoints ++;
} else {
  echo "Q1 : Erreur. La série est tournée en Irlande, Croatie et Islande.<br>";
}


//Question 2
if($_GET['Q2'] == "1") {
  echo "Q2 : C'est bon. G.R.R. Martin a écrit la saga Le Trône de fer.<br>";
  $totalPoints ++;
} else {
  echo "Q2 : Erreur. G.R.R. Martin a écrit la saga Le Trône de fer.<br>";
}


//Question 3
$_GET["Q3"] = strtolower($_GET["Q3"]);
if($_GET['Q3'] == "jon" | $_GET['Q3'] == "jon snow" | $_GET['Q3'] == "snow") {
  echo "Q3 : C'est bon. Le bâtard de Ned Stark s'appelle Jon Snow.<br>";
  $totalPoints ++;
} else {
  echo "Q3 : Erreur. Le bâtard de Ned Stark s'appelle Jon Snow.<br>";
}


//Question 4
if($_GET['Q4'] == "1") {
  echo "Q4 : C'est bon. Le roman français qui a inspiré l'auteur est Les Rois maudits, de Maurice Druon.<br>";
  $totalPoints ++;
} else {
  echo "Q4 : Erreur. Le roman français qui a inspiré l'auteur est Les Rois maudits, de Maurice Druon.<br>";
}

//Question 5
if($_GET['Q5a'] == "1" && $_GET['Q5b'] == NULL && $_GET['Q5c'] == "1" && $_GET['Q5d'] == "1") {
  echo "Q5 : C'est bon. Les dragons de Daenerys s'appellent Viserion, Drogon et Rhaegal.<br>";
  $totalPoints ++;
} else {
  echo "Q5 : Erreur. Les dragons de Daenerys s'appellent Viserion, Drogon et Rhaegal.<br>";
}

//Question 6
if($_GET['Q6'] == "1") {
  echo "Q6 : C'est bon. L'épée d'Arya s'appelle Aiguille.<br>";
  $totalPoints ++;
} else {
  echo "Q6 : Erreur. L'épée d'Arya s'appelle Aiguille.<br>";
}

//Question 7
if($_GET['Q7'] == "1") {
  echo "Q7 : C'est bon. Le vrai père de Joffrey Baratheon est son oncle Jamie.<br>";
  $totalPoints ++;
} else {
  echo "Q7 : Erreur. Le vrai père de Joffrey Baratheon est son oncle Jamie.<br>";
}

//Question 8
if($_GET['Q8'] == "1") {
  echo "Q8 : C'est bon. La devise de la maison Lannister est Je rugis.<br>";
  $totalPoints ++;
} else {
  echo "Q8 : Erreur. La devise de la maison Lannister est Je rugis.<br>";
}

//Question 9
if($_GET['Q9a'] == NULL && $_GET['Q9b'] == "1" && $_GET['Q9c'] == NULL && $_GET['Q9d'] == "1") {
  echo "Q9 : C'est bon. Peter Dinklage a joué dans Nip Tuck et Entourage.<br>";
  $totalPoints ++;
} else {
  echo "Q9 : Erreur. Peter Dinklage a joué dans Nip Tuck et Entourage.<br>";
}

//Question 10
if($_GET['Q10'] == "7") {
  echo "Q10 : C'est bon. Le nombre de saisons diffusées est de 7.<br>";
  $totalPoints ++;
} else {
  echo "Q10 : Erreur. Le nombre de saisons diffusées est de 7.<br>";
}

//Question 11
if($_GET['Q11'] == "1") {
  echo "Q11 : C'est bon. Le nombre de morts dans les trois premières saisons est de 5179.<br>";
  $totalPoints ++;
} else {
  echo "Q11 : Erreur. Le nombre de morts dans les trois premières saisons est de 5179.<br>";
}
$Q11=$_GET["Q11"];

if ($totalPoints == 11) {
  echo "<p>Votre score est de " . $totalPoints . " points. Bravo vous êtes incollable.</p>";
} elseif ($totalPoints == 7 | $totalPoints == 8 | $totalPoints == 9 | $totalPoints == 10) {
  echo "<p>Votre score est de " . $totalPoints . " points. Bravo vous êtes dans la moyenne.</p>";
}
elseif ($totalPoints == 3 | $totalPoints == 4 | $totalPoints == 5 | $totalPoints == 6) {
  echo "<p>Votre score est de " . $totalPoints . " points. Vous n'êtes pas très bon.</p>";
}
else {
  echo "<p>Votre score est de " . $totalPoints . " points. Vous êtes médiocre.</p>";
}
