<?php
  require_once('./createFormFormulaire.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon Questionnaire</title>
  </head>
  <body>
    <?php
      echo openForm('./pages/script.php');
      echo createMultiplesChoices('<b>Q1 : </b>Dans quel(s) pays la série est-elle tournée ? ', [
        [
          "value" => "1",
          "name" => "Q1a",
          "content" => "Irlande",
        ],
        [
          "value" => "1",
          "name" => "Q1b",
          "content" => "Croatie",
        ],
        [
          "value" => "0",
          "name" => "Q1c",
          "content" => "Canada",
        ],
        [
          "value" => "1",
          "name" => "Q1d",
          "content" => "Islande",
        ],
      ]);

      echo createOneChoice('<b>Q2 : </b>Qui a écrit la saga Le Trône de fer, dont la série est adaptée ? ', [
        [
          "value" => "1",
          "name" => "Q2",
          "content" => " G.R.R. Martin",
        ],
        [
          "value" => "0",
          "name" => "Q2",
          "content" => "J.R.R. Tolkien",
        ],
        [
          "value" => "0",
          "name" => "Q2",
          "content" => "G.R.R. Musso",
        ],
        [
          "value" => "0",
          "name" => "Q2",
          "content" => "P.L.R. Sulitzer",
        ],
      ]);

      echo createInput("text", "Q3", "", "<b>Q3 : </b>Comment s'appelle le fils bâtard de Ned Stark ? ");

      echo createOneChoice('<b>Q4 : </b>Quel roman français a inspiré l auteur du Trône de Fer ? ', [
        [
          "value" => "0",
          "name" => "Q4",
          "content" => "Le roman des rois, de Max Gallo",
        ],
        [
          "value" => "1",
          "name" => "Q4",
          "content" => "Les Rois maudits, de Maurice Druon",
        ],
        [
          "value" => "0",
          "name" => "Q4",
          "content" => "Les Trois mousquetaires, d'Alexandre Dumas",
        ],
        [
          "value" => "0",
          "name" => "Q4",
          "content" => "Les Trois dragons de Waterloo, par Christian Jacq",
        ],
      ]);

      echo createMultiplesChoices('<b>Q5 : </b>Comment s appellent les 3 dragons de Daenerys Targaryen ? ', [
        [
          "value" => "1",
          "name" => "Q5a",
          "content" => "Viserion",
        ],
        [
          "value" => "0",
          "name" => "Q5b",
          "content" => "Falcor",
        ],
        [
          "value" => "1",
          "name" => "Q5c",
          "content" => "Drogon",
        ],
        [
          "value" => "1",
          "name" => "Q5d",
          "content" => "Rhaegal",
        ],
      ]);

      echo createOneChoice('<b>Q6 : </b>Comment s appelle l épée d Arya Stark ?', [
        [
          "value" => "1",
          "name" => "Q6",
          "content" => "Aiguille",
        ],
        [
          "value" => "0",
          "name" => "Q6",
          "content" => "Dard",
        ],
        [
          "value" => "0",
          "name" => "Q6",
          "content" => "Venin",
        ],
        [
          "value" => "0",
          "name" => "Q6",
          "content" => "Piqûre",
        ],
      ]);

      echo createOneChoice('<b>Q7 : </b>Qui est le vrai père de Joffrey Baratheon ?', [
        [
          "value" => "0",
          "name" => "Q7",
          "content" => "Son oncle Tyrion",
        ],
        [
          "value" => "0",
          "name" => "Q7",
          "content" => "Son grand-père Tywin",
        ],
        [
          "value" => "1",
          "name" => "Q7",
          "content" => "Son oncle Jamie",
        ],
        [
          "value" => "0",
          "name" => "Q7",
          "content" => "Son cousin Lancel",
        ],
      ]);

      echo createOneChoice('<b>Q8 : </b>Quelle est la devise de la maison Lannister ?', [
        [
          "value" => "0",
          "name" => "Q8",
          "content" => "Un Lannister vaut mieux que deux tu l'auras",
        ],
        [
          "value" => "0",
          "name" => "Q8",
          "content" => "Plus haut, plus fort",
        ],
        [
          "value" => "1",
          "name" => "Q8",
          "content" => "Je rugis",
        ],
        [
          "value" => "0",
          "name" => "Q8",
          "content" => "L'hiver vient",
        ],
      ]);

      echo createMultiplesChoices('<b>Q9 : </b>Dans lesquelles/laquelle de ces séries a joué Peter Dinklage, qui interprète Tyrion Lannister ?', [
        [
          "value" => "0",
          "name" => "Q9a",
          "content" => "Sex and the city",
        ],
        [
          "value" => "1",
          "name" => "Q9b",
          "content" => "Entourage",
        ],
        [
          "value" => "0",
          "name" => "Q9c",
          "content" => "Californication",
        ],
        [
          "value" => "1",
          "name" => "Q9d",
          "content" => "Nip Tuck",
        ],
      ]);

      echo createInput("text", "Q10", "", "<b>Q10 : </b>A ce jour, combien la série compte de saison(s) diffusée(s) (en chiffre)?");

      echo createOneChoice('<b>Q11 : </b>Combien de morts ont été dénombrés lors des trois premières saisons ?', [
        [
          "value" => "0",
          "name" => "Q11",
          "content" => "3450",
        ],
        [
          "value" => "0",
          "name" => "Q11",
          "content" => "4782",
        ],
        [
          "value" => "1",
          "name" => "Q11",
          "content" => "5179",
        ],
        [
          "value" => "0",
          "name" => "Q11",
          "content" => "7227",
        ],
      ]);

      echo createSubmit("Envoyer");

      echo closeTag("form");
    ?>
  </body>
</html>
