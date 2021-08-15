
<?php
//Connecting to database
require "connectingToDatabase.php";

foreach (range('a', 'z') as $char) {

$sql = "SELECT `name` FROM `games_data` WHERE `name` LIKE '$char%' ORDER BY `name`";
$name_exist = mysqli_query($conn, $sql);
$name_count = mysqli_num_rows($name_exist);

    if ($name_count > 0){

        echo "<div id='container'>";
        echo "<h1>$char</h1>";
        while ($row = mysqli_fetch_array($name_exist)){
            echo "<main>";
            echo "<p>" . $row[0] . "</p>";
            echo "</main>";
        }
        echo "</div>";
    }

}
?>