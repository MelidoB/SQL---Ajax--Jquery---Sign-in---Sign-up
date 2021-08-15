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

 var loaded = true;
    
    
     $(document).ready(function(){

         if (loaded == true){
            loaded = false;
             $('#data').load("database/dataFromDatabase.php");
        
    }
        
         $('#submit').click(function(event){
            event.preventDefault();
            $.ajax({
             url:"database/insertDataIntoDatabase.php",
             method: "post",
             data: $('form').serialize()
         })
         $.ajax({
             url:"database/dataFromDatabase.php",
             method: "post",
             data: $('form').serialize()
         })

             
         $('#data').load("database/dataFromDatabase.php").fadeIn("slow");
         })
         

         


         
     });




     
 </script>
</head>
<body>
<form  method="post">

    <label for="name">Name</label><input type="text" name="name">
    <br>
    <label for="name">Message</label><input type="text"  name="message">

    <input type="submit" name="submit" value="Send" id="submit">
</form>

  <div id="data"></div>  




</body>
</html>