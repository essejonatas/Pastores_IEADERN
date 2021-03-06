<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">

	<title>Lista Rodízio de Pastores IEADERN 2015</title>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular.min.js"></script>
  	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular-animate.js"></script>

	<script src="data.js"></script>
	<script src="scripts.js"></script>


	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">

</head>

<body ng-app="IEADERN" class="container">

	<header>
		<img src="http://www.ieadern.org.br/imagens/logo.png" alt="">
	</header>

	<h1 class="title">Rodízio de Pastores 2015</h1>

	<nav class="navbar navbar-inverse">
		<form class="navbar-form" role="search">
			<span class="text-light">filtre sua busca: </span>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="setor" ng-model="setor">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="congregação" ng-model="igreja">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="pastor" ng-model="pastor">
			</div>
		</form>
	</nav>

	<?php for ($i = 1; $i <= 39; $i++) { ?>

	<div ng-controller="<?= "setor".$i ?>">
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<th class="bg-blue"><?= "SETOR ".$i ?></th>
				</thead>
				<tr>
					<th>IGREJA</th>
					<th>PASTOR</th>
				</tr>
				<tr ng-repeat="x in igrejas | filter:igreja | filter:pastor">
					<td>{{ x.igreja }}</td>
					<td>{{ x.pastor }}</td>
				</tr>
			</table>
		</div>
	</div>	
	<?php } ?>
	<footer>
		
	</footer>
</body>
</html>

