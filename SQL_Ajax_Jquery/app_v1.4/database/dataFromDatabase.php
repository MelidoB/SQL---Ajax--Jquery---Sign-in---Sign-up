

<table style="align">
    <tr>
        <th>name</th>
        <th>message</th>
    </tr>

<?php

//Connecting to database
require "connectingToDatabase.php";



        $sql = "SELECT * FROM message_app";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            while ($row = mysqli_fetch_array($result)){
                echo "<tr><td>" . $row[0] . "</td><td>" .$row[1] . "</td></tr>";
            }
        }
        
?>

</table>