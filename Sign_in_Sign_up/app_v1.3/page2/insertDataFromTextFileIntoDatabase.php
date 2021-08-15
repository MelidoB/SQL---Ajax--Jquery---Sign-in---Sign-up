<?php


//Entering game list into database
//
echo '<a href="https://ultimatepopculture.fandom.com/wiki/List_of_Nintendo_64_games#B#softwarelist"> Data Obtained from: https://ultimatepopculture.fandom.com/wiki/List_of_Nintendo_64_games#B</a>';

$url = 'https://ultimatepopculture.fandom.com/wiki/List_of_Nintendo_64_games#B';
$html = new DOMDocument();
@$html->loadHTMLFile($url);
$xpath = new DOMXPath($html);
$nodelist = $xpath->query(".//i/span[@class='new']/text()");


        //SQL code does not accept single quotes for variables.
        //Solution: Change every signle quote for a double quote in the php file without affecting the document. 
        foreach ($nodelist as $n) {
                $name = $n->nodeValue;     
                require 'database/insertDataIntoDatabase.php';
        }
?>