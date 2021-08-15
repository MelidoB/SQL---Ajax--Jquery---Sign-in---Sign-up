

<table style="align">
    <tr>
        <th>name</th>
        <th>message</th>
    </tr>

<?php

$name = $_POST['name'] ?? "Melido";
$message = $_POST['message'] ?? "";



//Connecting to database
require "connectingToDatabase.php";



        $sql = "SELECT * FROM message_app";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
                if($row["name"] == $name){
                    echo "<tr id='left'><td>" . $row["name"] . "</td><td>" .$row["message"] . "</td></tr>";
                }
                else{
                    echo "<tr><td>" . $row["name"] . "</td><td>" .$row["message"] . "</td></tr>";
                }

                
            }
        }
        
?>

</table>