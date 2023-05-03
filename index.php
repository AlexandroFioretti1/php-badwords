<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php badwords</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
  <div class="container d-flex justify-content-center">
    <div class="card rounded-0 shadow col-8">
      <div class="card-body">
        <form action="myscript.php" method="get">
          <div class="mb-3">
            <label for="frase">Testo libero</label>
            <input type="text" name="frase" id="frase" class="form-control" placeholder="Inserisci una frase liberatoria" aria-describedby="suffixId">
          </div>
          <div class="mb-3">
            <label for="censura">Parola da censura</label>
            <input type="text" name="censura" id="censura" class="form-control" placeholder="scegli la/le parola/e da censurare" aria-describedby="suffixId">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-primary">Reset</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>