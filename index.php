<?php
  require ('capitalize.php');
?>

<!DOCTYPE html>
<html lang ="en">
<head>
  <title>Project 2</title>
  <meta charset ='utf-8'>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>
<h1>Capitalization Tool</h1>
<div id ='main'>
<div>
    <form method='post' id='form1'>
      <h2>Text</h2>
Enter text here (required)<br>
<?php if (isset($errors)): ?>
    <ul>
      <?php foreach ($errors as $error):?>
          <li><?=$error?></li>
      <?php endforeach; ?>
    </ul>
<?php endif; ?>
<textarea rows="6" cols="40" name="text" form="form1"><?=$form->sanitize($text)?></textarea>
</div>
<div>
      <h2>Capitalization</h2><br>
        <input type='radio' name='cap' value='true' id = 'style'> All CAPS <br>
        <input type='radio' name='cap' value='false' id = 'style'> all lowercase <br>
</div>
<div>
      <h2>Style</h2><br>
        <input type='checkbox' name='Bold' id = 'style1'> Bold <br>
        <input type='checkbox' name='Italize' id = 'style2'> Italize<br>
        <input type='checkbox' name='Underline' id = 'style3'> Underline<br>
      <br>
        <input type='submit' value='Submit'>
  </form>
</div>
</div>
<hr>
  <h1>Output</h1><br>
  <?php if(isset($_POST['Bold'])) echo '<strong>';?>
  <?php if(isset($_POST['Italize'])) echo '<i>';?>
  <?php if(isset($_POST['Underline'])) echo '<u>';?>
    <?=$form->sanitize($text)?>
</body>
</html>
