<?php
	session_start();
	
	require "../util/header.php";
	include "../util/shortcuts.php";
	global $conn;
	
	if(isset($_SESSION['username']) && isset($_SESSION['destinatar'])){
		
		  $firstname = $_GET['username'];
        $sql = "SELECT * FROM utilizatori WHERE nume='$firstname'";

		$destinatar=$_SESSION['destinatar'];
		$sqlProfile="SELECT * FROM utilizatori WHERE id = $destinatar";
		$resultProfile = mysqli_query($conn, $sqlProfile);
		
		while($profileRow = mysqli_fetch_assoc($resultProfile)) {
			echo $sqlProfile;
		}
		/* if (mysqli_num_rows($resultProfile) > 0) {
			while($profileRow = mysqli_fetch_assoc($resultProfile)) {
				$numeDestinatar=$profileRow['username']; 
				$userId=$profileRow['Id'];
			?>	
			<div class="profileForm">
				<div class="row">
					<div class="col-xs-9 col-md-3 text-center mx-auto" style="margin-top:30px; margin-bottom:30px; font-size:20px; color: blue; border:2px solid blue;"><?php echo "Profil $numeDestinatar";?></div>
				</div>
				<div class="row">
					<div class="col-xs-9 col-md-3  mx-auto"><?php echo "Id: $userId ";?></div>
				</div>
				<div class="row">
					<div class="col-xs-9 col-md-3  mx-auto"><a href="mesaj.php">Trimite mesaj privat</a></div>
				</div>
				<div class="row">
					<div class="col-xs-9 col-md-3  mx-auto"><a href="adaugaPr.php">Trimite cerere de pritenie</a></div>
				</div>
				<div class="row">
					<div class="col-xs-9 col-md-3  mx-auto"><?php echo "Nume: ".$profileRow["nume"];?></div>
				</div>
				<div class="row">
					<div class="col-xs-9 col-md-3  mx-auto"><?php echo "Prenume: ".$profileRow["prenume"];?></div>
				</div>
				<div class="row">
					<div class="col-xs-9 col-md-3  mx-auto">
						<?php 
							$regDate=strtotime($profileRow["data_inregistrare"]);
							echo "Data inregistrarii: ". date('d.M.Y', $regDate);
						?>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-md-3  mx-auto"><?php echo "Gen: ".$profileRow["gen"];?></div>
				</div>
				<div class="row">
					<div class="col-xs-9 col-md-3   mx-auto">
						<?php $dob=strtotime($profileRow["data_nasterii"]);
							echo "Data nasterii " . date("d.M.Y", $dob) ;
						?>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-md-3 mx-auto">
						<?php 
							if($profileRow['id_functie']=1){
								echo "E-mail: ".$profileRow["email"];
							}
						?>
						
					</div>
				</div>
				<div class="row">
					<div class="col-xs-9 col-md-3  mx-auto"><?php echo "Localitate: ".$profileRow["localitate"];?></div>
				</div>
				<div class="row">
					<div class="col-xs-9 align-start col-md-3  mx-auto"><?php echo "Tip cont: ".$profileRow["tip_cont"];?></div>
				</div>
			</div>
			<?php
			}
		} */
	} 
	
	
?>						