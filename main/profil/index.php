
        <div> Utilizatori conectati</div>
        <?php
			  require ($_SERVER['DOCUMENT_ROOT'].'/util/connection.php');
			  $sql = "SELECT * FROM utilizatori WHERE conectat=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        $nume = $row["nume"]." ". $row["username"];
        $firstname = $row["username"];
        echo '<tr><td><a href="../profil/profiles.php?username='.$firstname.'">'.$firstname.'</a><br /></td></tr>';
    }
    echo '</table>';
}
else {
    echo "0 results";
}
			  ?>
