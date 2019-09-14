<?php
	session_start();
	require ($_SERVER["DOCUMENT_ROOT"] .'/util/config.php');
	
?>
<header>
	<div class="container myContainer">
		<div class="row">
			<div class="col-xs-12 col-md-7 mx-auto text-center ">
				<img class="hr" src="../res/divider.png">
				<?php
					global $date_string;
					echo "<span class='glyphicon glyphicon-time'></span>".ucfirst($date_string);
				?>
				<img class="imgCenter" src="../res/logo.gif">
				<img class="hr" src="../res/divider.png">
			</div>
		</div>
		<?php
			global $conn;
			if(isset($_SESSION['username'])){
				$user= $_SESSION['username'];
				echo"
				<div class=\"row\">
				<div class=\"col-xs-12 col-md-9 mx-auto text-center\">
				<h4>Bine ai (re)venit, <a href='profil.php?utilizator=$user'>$user</a>!</h4>
				</div>
				";
			}
			
		?>
	</header>
