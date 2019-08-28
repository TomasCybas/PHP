<?php
require_once "db.php";
if(isset($_POST['insert'])){
    $code = $db -> real_escape_string($_POST['code']);
    $name = $db -> real_escape_string($_POST['name']);
    $population = $db -> real_escape_string($_POST['population']);
    $life_expectancy = $db -> real_escape_string($_POST['lifeExpectancy']);
    $db -> query("INSERT INTO country (code, name, population, life_expectancy) VALUES ('$code','$name','$population','$life_expectancy')");

    header("Location: countries.php");
    die();
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 

   <div class="container">

       <div class="row">
        
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Pridėti naują šalį</h4>
          <form method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Pavadinimas</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required>
               
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Kodas</label>
                <input type="text" class="form-control" name="code" id="code" placeholder="" value="" required>
                
              </div>
            </div>
            
             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Populiacija</label>
                <input type="text" class="form-control" name="population" id="population" placeholder="" value="" required>
               
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Vidutinė gyvenimo trukmė</label>
                <input type="text" class="form-control" name="lifeExpectancy" id="lifeExpectancy" placeholder="" value="" required>
                
              </div>
            </div>
            
            

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="insert">Išsaugoti</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>