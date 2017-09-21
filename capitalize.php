<?php

if(isset($_POST['text1'])){
  $text = $_POST['text1'];
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
