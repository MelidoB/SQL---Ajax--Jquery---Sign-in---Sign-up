<?php
//Entering game list into database
//
        $file_name = "games_list.txt";
        $lines_array = file($file_name); //contain each line of the document

        //SQL code does not accept single quotes for variables.
        //Solution: Change every signle quote for a double quote in the php file without affecting the document. 
        foreach($lines_array as $name){     
                require 'database/insertDataIntoDatabase.php';
        }
?>