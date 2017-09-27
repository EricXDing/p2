<?php

require ('form.php');
use DWA\Form;

$form = new form($_POST);
$keyword = $form->get('text','');

if($form->isSubmitted()){
$errors = $form->validate([
  'text' => 'required'
]);
}

if(isset($_POST['text'])){
  $text = $_POST['text'];
} else {
  $text = '';
}

if(isset($_POST['cap'])){
  $cap = $_POST['cap'];
} else {
  $cap = '';
}

if ($cap=='true'){
  $text=strtoupper($text);
}
elseif ($cap=='false') {
  $text=strtolower($text);
}
