<?php
require_once "db.php";
if(isset($_GET['delete'])){
    $code = $db -> real_escape_string($_GET['code']);
    $db -> query("DELETE FROM city WHERE country_code = '$code'");
    $db -> query("DELETE FROM country WHERE code = '$code'");
}
$countries = $db -> query("SELECT * FROM country ORDER BY name ASC");
$countries_arr = $countries -> fetch_all(MYSQLI_ASSOC);

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

      <h1>Valstybių sąrašas</h1>
      
      <div class="row py-3">
          <div class="col-md-12">
              <a href="countries_add.php" class="btn btn-success">Pridėti</a>
          </div>
      </div>
      <div class="row">
      	<table class="table">
      		<tr>
      			<th>Pavadinimas</th>
      			<th>Plotas</th>
      			<th>Populiacija</th>
      			<th>Vidutinė gyvenimo trukmė</th>
      			<th>Veiksmai</th>
      		</tr>
            <?php foreach ($countries_arr as $country) { ?>
      		<tr>
      			<td><?php echo $country['name'] ?></td>
      			<td><?php echo $country['surface_area'] ?></td>
      			<td><?php echo $country['population'] ?></td>
      			<td><?php echo $country['life_expectancy'] ?></td>

      			<td>
      				<a href="countries_edit.php?code=<?php echo $country['code']?>" class="btn btn-success">Koreguoti</a>
      				<a href="countries.php?delete=1&code=<?php echo $country['code']?>" class="btn btn-danger">Ištrinti</a>
      				<a href="cities.php?code=<?php echo $country['code']?>" class="btn btn-primary">Šalies miestai</a>
      			</td>
      		</tr>
            <?php } ?>
      	</table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>