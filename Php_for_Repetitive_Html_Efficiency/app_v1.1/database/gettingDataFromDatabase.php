
<?php
//Connecting to database
require "connectingToDatabase.php";


$sql = "SELECT `name` FROM `games_data` WHERE `name` LIKE '%a%' ORDER BY `name`";
$name_exist = mysqli_query($conn, $sql);
$name_count = mysqli_num_rows($name_exist);

    if ($name_count > 0){
        while ($row = mysqli_fetch_array($name_exist)){
            echo "<tr><td>" . $row[0] . "</td></tr> <br>";
        }
    }

?>