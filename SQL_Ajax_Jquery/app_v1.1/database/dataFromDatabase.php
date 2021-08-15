

<table style="align">
    <tr>
        <th>name</th>
        <th>episodes</th>
    </tr>

<?php


//Connecting to database
require "connectingToDatabase.php";

    $sql = "SELECT * FROM animes";
    
        $result = $conn-> query($sql);
        
        if ($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>" . $row["name"] . "</td><td>" .$row["episodes"] . "</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        
?>

</table>