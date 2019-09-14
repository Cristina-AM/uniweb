<?php 
//display all users
include_once("../../util/connection.php");

$sql = "SELECT * FROM utilizatori";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        $firstname = $row["nume"];
        echo '<tr><td><a href="../profile/profiles.php?first='.$firstname.'">'.$firstname.'</a><br /></td></tr>';
    }
    echo '</table>';
}
else {
    echo "0 results";
}
include_once("menu.php");
?>