<?php
$frase = trim($_GET["frase"]);
$censura =trim($_GET["censura"]);
$censurata =str_replace($censura,"***",$frase)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>php badwords resaults</title>
</head>
<body>
  <div class="container d-flex justify-content-center">
    <div class="card rounded-0 shadow col-8">
      <div class="card-body">
        <p>La tua frase è : <?php echo $frase ?> </p>
        <p>la frase intera è lunga : <?php echo strlen($frase)?></p>
        <p>questa è la frase censurata : <?php echo $censurata ?></p>
        <p>la frase censurata è lunga : <?php echo strlen($censurata)?></p>
      </div>
    </div>
  </div>
</body>
</html>