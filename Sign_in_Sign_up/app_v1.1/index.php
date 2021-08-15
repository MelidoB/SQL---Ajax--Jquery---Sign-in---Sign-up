<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="ajax_request_to_insert_data_into_database.js"></script>
  <script src="ajax_request_existDataInDatabase.js"></script>
  <script src="ajax_request_to_update_data_into_database.js"></script>
  
</head>
<body>
    
    <form method="post">
        <h1 id="sign_up">Sign up</h1>
        <p id="sign_up_exist"></p>
        <label for="">username</label><input type="text" id="username" name="username">
        <label for="">password</label><input type="password" id="password" name="password">
        <input type="submit" id="submit_sign_up" name="submit_sign_up">    
    </form>

    <form method="post">
        <input type="submit" value="verification" id="verification">
    </form>



    <form method="post">
        <h1 id="sign_in">Sign in</h1>
        <p id="sign_in_exist"></p>
        <label for="">username</label><input type="text" id="username" name="username">
        <label for="">password</label><input type="password" id="password" name="password">
        <input type="submit" id="submit_sign_in" name="submit_sign_in">    
    </form>
</body>
</html>

