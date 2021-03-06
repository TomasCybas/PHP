<?php
include "StilizuotasTekstas.php";

$antraste = new StilizuotasTekstas('Labas pasauli', 'red', '60px');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Bootstrap 101 Template</title>

<!-- Bootstrap -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<article class="container">
					<header class="jumbotron text-center">
						<h2>
                            <?= $antraste ?>
                        </h2>
						<p class="text-warning">Sub tekst</p>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Officia doloremque minima ab? Id provident aperiam atque excepturi
						repudiandae quis eveniet expedita dolores esse doloremque quasi
						sed magnam commodi sit modi!</p>
					
					
					<?= (new StilizuotasTekstas('Labas'))->setSize('50px')->getParagraph(3) ?>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Similique asperiores ab perspiciatis aliquid maiores iusto
						corporis perferendis ea nihil vel veritatis accusamus atque
						incidunt nemo natus eveniet consequuntur placeat quidem!</p>
					
				</article>
			</div>
		</div>

	</div>
	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>

</body>
</html>