<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="ajax_request_to_insert_data_into_database.js"></script>
  <script src="ajax_request_to_update_data_into_database.js"></script>
</head>
<body>
    
    <form method="post">
        <h1 id="sign_in">Sign up</h1>
        <p id="exist"></p>
        <label for="">username</label><input type="text" id="username" name="username">
        <label for="">password</label><input type="password" id="password" name="password">
        <input type="submit" id="submit" name="submit">    
    </form>

    <form method="post">
        <input type="submit" value="verification" id="verification">
    </form>

</body>
</html>

