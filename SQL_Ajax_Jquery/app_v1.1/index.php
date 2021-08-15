<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="database/tableStyleForDatabaseData.css">
    <script src="jquery-3.6.0.js"></script>
 <script type="text/javascript">
     $(document).ready(function(){
         $('#submit').click(function(event){
            event.preventDefault();
            $.ajax({
             url:"database/insertDataIntoDatabase.php",
             method: "post",
             data: $('form').serialize()
         })
         })
     })
 </script>
</head>
<body>
<form  method="post">

    <label for="name">Name</label><input type="text" name="name">
    <br>
    <label for="name">Episodes</label><input type="number"  name="episodes">

    <input type="submit" name="submit" value="submit" id="submit">
</form>
<?php 
        require "database/dataFromDatabase.php";
        ?>
    




</body>
</html>