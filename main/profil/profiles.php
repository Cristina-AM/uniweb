<?php
			  require ($_SERVER['DOCUMENT_ROOT'].'/util/connection.php');
				global $conn;
    if (isset($_GET['username']))
    {
        $firstname = $_GET['username'];
        $sql = "SELECT * FROM utilizatori WHERE nume='$firstname'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$firstname."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["Id"].'</td></tr>';
                // echo '<tr><td>Avatar:</td><td><img src="'.$row["avatar"].'" width="100px" /></td></tr>';
                echo '<tr><td>Nume:</td><td>'.$row["nume"].'</td></tr>';
                echo '<tr><td>Prenume:</td><td>'.$row["prenume"].'</td></tr>';
                echo '<tr><td>Username:</td><td>'.$row["username"].'</td></tr>';
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All our members:</h2>';

        $sql = "SELECT * FROM utilizatori";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   
            while($row = $result->fetch_assoc()) {
                
                echo '<hr />';
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["Id"].'</td></tr>';
                // echo '<tr><td>Avatar:</td><td><img src="'.$row["avatar"].'" width="100px" /></td></tr>';
                echo '<tr><td>Nume:</td><td>'.$row["nume"].'</td></tr>';
                echo '<tr><td>Prenume:</td><td>'.$row["prenume"].'</td></tr>';
                echo '<tr><td>Username:</td><td>'.$row["username"].'</td></tr>';
                echo '</table>';
                
            }
        }
        else {
           echo "0 results";
        }
    }
    
?>