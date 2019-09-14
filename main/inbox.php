<?php
	session_start();
	if(isset($_SESSION['logat'])){
		require ($_SERVER["DOCUMENT_ROOT"] .'/util/header.php');
		}else{
		session_destroy();
		header('location: ../main/index.php');
		
	}
?>	
<head><meta http-equiv="refresh" content="60"></head>
<?php 
	include "../util/shortcuts.php";
	if(isset($_POST['butonMesaj']) && isset($_SESSION['destinatar'])){
		$destinatar=$_SESSION['destinatar'];
	}
	function mesajePrimite(){
		if(isset($_SESSION['id_user'])){
			$userId=$_SESSION['id_user'];
		}
		$sqlMesajePr="SELECT * FROM mesaje WHERE id_expeditor ";
	}
	
?>
<nav class="navbar navbar-expand-sm navbar-expand" id="inboxNav">
	
	<!-- Links -->
	<ul class="navbar-nav">
		<li class="nav-item ">
			<a class="nav-link active" href="#">Mesaje primite</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Mesaje trimise</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Mesaje salvate</a>
		</li>
		</ul>
	
</nav>		