<!DOCTYPE html>
<html>
<head>
	<title>Exemplo dash board</title>
	<!-- Última versão CSS compilada e minificada -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/all.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/style-reset.css">

	<link rel="icon" type="image/jpg" href="img/android-logo.jpg">

</head>
<body>
	<section class="menu">
		<div class="logo">
			<img src="img/android-logo.jpg" alt="style" class="logo-painel">
		</div>

		<div class="list-menu">
			<ul class="menu-list">
				<li>
					<a href="?page=home">
						<i class="fas fa-house-user"></i>
						Home
					</a>
				</li>
				<li>
					<a href="?page=list">
						<i class="fas fa-id-card"></i>
						Lista
					</a>
				</li>
				<li>
					<a href="?page=forms">
					<i class="fas fa-align-left"></i>
						Formulario
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="content">
		<div class="top-dashboard">

			<div class="btn-group user-dash">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  	<img src="img/user.png" alt="Mike" class="user-dashboard">
			    <p class="user-name">Mike W.</p>
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu dp-menu">
			    <li><a href="#">Perfil</a></li>
			    <li><a href="#">Opcoes</a></li>
			    <li><a href="#">Logout</a></li>
			  </ul>
			</div>

		</div> <!-- TOP DASH BOARD -->

		<div class="content-ds">
			<div class="bred">
				<a href="" class="bred">Home ></a><a href="" class="bred">Dashboard</a>
			</div>
			<?php 
				if ( !isset($_GET['page']))
					include 'pages/home.php';
				elseif( file_exists("pages/{$_GET['page']}.php")) 
					include "pages/{$_GET['page']}.php";
				else
					include 'pages/404.php';
				
			?>
			
		</div>

	</section>


	<!-- Última versão JavaScript compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>