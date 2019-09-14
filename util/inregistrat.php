<?php
	session_start();
	if(!isset($_SESSION['inregistrat'])){
		session_destroy();
		header("Location: ../index.php");
		echo "<a href=\"../index.php\"><img src=\"../res/home.gif\"> Inapoi la pagina principala</a>";
	}
?>
<!DOCTYPE html>

<html lang="ro" dir="ltr">
	
	<head>
		<?php
			session_start();
			require ($_SERVER["DOCUMENT_ROOT"] .'/util/header.php');
		?>
		
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-11 mx-auto col-md-11 text-center text-center alert-succes">
					Contul a fost creat cu succes! Va fi validat de catre echipa in cel mai scurt timp.	
				</div>
			</div>
		</div>		
		
		<?php
			require ($_SERVER["DOCUMENT_ROOT"] .'/util/footer.php');
		?>