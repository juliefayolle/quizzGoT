<?php
//Une ouverture de balise form
  //Definir une action
function openForm($action = "#")
{
  return "<form action='" . $action . "'>";
}

//Une fermeture de balise form
function closeTag($tag)
{
  return "</" . $tag . ">";
}

//Mise en place d'un input
  //Avec un label

function createInput($type, $name, $value = "", $title)
{
  return "<h3>" . $title . "</h3><input type='" . $type . "' name='" . $name . "' value='" . $value . "'>";
}


function createMultiplesChoices($title, $options)
{

  $html = "<h3>" . $title . "</h3>";
  foreach ($options as $key => $value)
  {
    $html .="<input type='checkbox' value='" . $value['value'] . "' name='" . $value['name'] . "'>" . $value['content'] . "";
  }

  return $html;
}

function createOneChoice($title, $options)
{

  $html = "<h3>" . $title . "</h3>";
  foreach ($options as $key => $value)
  {
    $html .="<input type='radio' value='" . $value['value'] . "' name='" . $value['name'] . "'>" . $value['content'] . "";
  }
  return $html;
}


//Mise en place d'un select
function createSelect($name, $label, $options)
{

  $html = "<label>" . $label . "</label>";
  $html .= "<select name='" . $name . "'>";
  foreach ($options as $key => $value)
  {
    $html .="<option value='" . $value['value'] . "'>" . $value['content'] . "</option>";
  }
  $html .= "</select>";  // ./ --> on concatene
  return $html;
}

//Generer un bouton submit
function createSubmit($value) {
  return "<input type='submit' value='" . $value . "'>";
}
