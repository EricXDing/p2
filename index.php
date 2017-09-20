<?php
  require ('getAllBooks.php')
?>

<!DOCTYPE html>
<html lang ="en">
<head>

  <title> </title>
  <meta charset ='utf-8'>

</head>
<body>

  <h1>Foobooks</h1>

  <form method='GET'>
    <labe for='LKeyword'>Filter by keyword:</label><br>
    <input type='text' name='keyword' id='LKeyword' value='<?=$keyword?>'><br>
    <input type='checkbox' name='caseSensitive' <?php if($caseSensitive) echo 'CHECKED';?>>Case Sensitive<br>
    <input type='submit' class='btn btn-primary btn-small' value='filter books'>
  </form>


<?php if(count($books) == 0) : ?>
    <div>Your keyword did not match any results.</div>
<?php elseif ($keyword !== ''): ?>
    <div>You searched for <strong><?=$keyword?></strong>.</div>
<?php endif; ?>




  <?php foreach ($books as $title => $book) : ?>
  <div class='book' style='border:1px solid black'>
          <h2><?=$title?></h2>
          <h3>Author: <?=$book['author']?></h3>
          <h3>Published Year: <?=$book['published']?></h3>
          <img src="<?=$book['cover']?>" alt='<?=$title?>'>

  </div>
<?php endforeach; ?>


</body>
</html>
