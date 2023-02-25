<?php
	session_start();
	if(empty($_SESSION['active']))
	{
	    header('Location: ../');
	}
?>

	<header>
		<div class="header">
			
			<h1>Sistema</h1>
			<div class="optionsBar">
				<p>República Dominicana, Santo Domingo Este
				</p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['user'] ?></span>
				<img class="photouser" src="img/user.png" alt="Usuario">
				<a href="salida.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
		<?php include "nav.php"; ?>
	</header>