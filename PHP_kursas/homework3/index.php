<?php

if(isset($_GET["klausimas1"])){
    $ats1 = $_GET["klausimas1"];
}else {
    $ats1 = 0;
}
if(isset($_GET["klausimas2"])){
    $ats2 = $_GET["klausimas2"];
}else {
    $ats2 = 0;
}
if(isset($_GET["klausimas3"])){
    $ats3 = $_GET["klausimas3"];
}else {
    $ats3 = 0;
}
if(isset($_GET["submit"])){
    $submit = $_GET["submit"];
}else {
    $submit = "";
}

$score = 0;
if($submit != ""){
    if($ats1 == 1) {
        $score++;
        $ats1 = true;
    }else {
        $ats1 = false;
    }
    if($ats2 == 2){
        $score++;
        $ats2 = true;
    }else{
        $ats2 = false;
    }
    if($ats3 == 3){
        $score++;
        $ats3 = true;
    }else{
        $ats3 = false;
    }
}

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
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.container {
	margin-top: 20px;
}

h4{
 margin-top: 0px;
 padding-top: 0px;
}


</style>
</head>
<body>
	<div class="container">
		<!-- Static navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#navbar" aria-expanded="false"
						aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Baltic talents</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>

					</ul>

				</div>
				<!--/.nav-collapse -->
			</div>
			<!--/.container-fluid -->
		</nav>

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Apklausa </h1>
   			 <p> <?=($submit != "")? "Jūs atsakėte teisingai į ".$score." klausimus iš 3 ir surinkote ".(round($score/3, 2)*100)."%":""?></p>
			
		
		</div>
		<div class="row">
			
			
			<div class="col-md-8 col-md-offset-2">

				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Testas</h3>
					</div>
					<div class="panel-body">
						<form action="index.php" method="get" class="form2">
						<div class="row">
							<div class="col-md-6 col-xs-6">
							<img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Rocky_Mountain_Bull_Elk.jpg" class="img-responsive">
							</div>
							<div class="col-md-6 col-xs-6" >
								
								    <h4>Koks tai gyvūnas? </h4> 
									 <input type="radio" name="klausimas1" value="1"> 
									 Elnias <br>
									 <input type="radio" name="klausimas1" value="2"> 
									 Šuo <br>
									 <input type="radio" name="klausimas1" value="3"> 
									 Katinas <br>
									 <input type="radio" name="klausimas1" value="4" > 
									 Begemotas <br><br>
                                <?php if($submit!= "") {
                                    if($ats1){
                                        echo '<div class="alert alert-success" >Taip, teisingai tai yra elnias</div>';
                                    }else {
                                        echo '<div class="alert alert-danger" >Ne, tai yra elnias</div>';
                                    }
                                }?>
							</div>
						</div>
						
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-6 col-xs-6">
							<img src="https://upload.wikimedia.org/wikipedia/commons/4/47/American_Eskimo_Dog.jpg" class="img-responsive">
							</div>
							<div class="col-md-6 col-xs-6">
								
								    <h4>Koks tai gyvūnas? </h4> 
									 <input type="radio" name="klausimas2" value="1"> 
									 Elnias <br>
									 <input type="radio" name="klausimas2" value="2"> 
									 Šuo <br>
									 <input type="radio" name="klausimas2" value="3"> 
									 Katinas <br>
									 <input type="radio" name="klausimas2" value="4" > 
									 Begemotas <br><br>
                                <?php if($submit!= "") {
                                    if($ats2){
                                        echo '<div class="alert alert-success" >Taip, teisingai tai yra šuo</div>';
                                    }else {
                                        echo '<div class="alert alert-danger" >Ne, tai yra šuo</div>';
                                    }
                                }?>
									
								
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-6 col-xs-6">
							<img src="https://upload.wikimedia.org/wikipedia/commons/f/f6/Shaded_Tan_Maine_Coon_cat.jpg" class="img-responsive">
							</div>
							<div class="col-md-6 col-xs-6">
								
								    <h4>Koks tai gyvūnas? </h4> 
									 <input type="radio" name="klausimas3" value="1"> 
									 Elnias <br>
									 <input type="radio" name="klausimas3" value="2"> 
									 Šuo <br>
									 <input type="radio" name="klausimas3" value="3"> 
									 Katinas <br>
									 <input type="radio" name="klausimas3" value="4" > 
									 Begemotas <br><br>
                                <?php if($submit!= "") {
                                    if($ats3){
                                        echo '<div class="alert alert-success" >Taip, teisingai tai yra katinas</div>';
                                    }else {
                                        echo '<div class="alert alert-danger" >Ne, tai yra katinas</div>';
                                    }
                                }?>
									
								
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							
							<div class="col-md-6 col-xs-6 col-md-offset-6 col-xs-offset-6">
								
									<input name="submit" type="submit" class="btn btn-lg btn-primary btn-block" value="Spėti">
								
							</div>
						</div>
						</form>
						
					</div>
				</div>
				
				
			</div>
			
			
		</div>
	</div>
	<!-- /container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>