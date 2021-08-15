<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--css files-->
    <link rel="stylesheet" href="css_files/form.css">
    <link rel="stylesheet" href="css_files/body.css">
    <link rel="stylesheet" href="css_files/navegation_bar.css">
    <!--js files-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="ajax_request_js/ajax_request_to_insert_data_into_database.js"></script>
    <script src="ajax_request_js/ajax_request_exist_data_in_database.js"></script>
    <script src="ajax_request_js/ajax_request_to_update_data_into_database.js"></script>
    <script src="js_files/navegation_bar_functionality.js"></script>
</head>
<body>

    <div id="navegation_bar">
        <h3>Sign in</h3>
        <h3>/</h3>
        <h3>Sign up</h3>
    </div>

    

    <div id="sign_up_container">
    <form method="post" id="sign_up_form">
        <h1 id="sign_up">Sign up</h1>
        <p id="sign_up_exist"></p>
        <h3><label for="username_sign_up">username</label></h3><input type="text"  name="username_sign_up" pattern="[A-Za-z0-9_-]{1,30}" required>
        <h3><label for="password_sign_up">password</label></h3><input type="password"  name="password_sign_up" pattern="[A-Za-z0-9_-]{1,30}" required>
        <input type="submit" id="submit_sign_up" name="submit_sign_up">   
    </form>

    <form method="post">
        <input type="submit" value="verification" id="verification">
    </form>
</div>

<div id="sign_in_container">
        <form method="post" id="sign_in_form">
            <h1 id="sign_in">Sign in</h1>
            <p id="sign_in_exist"></p>
            <h3><label for="username_sign_in">username</label></h3><input type="text" name="username_sign_in" pattern="[A-Za-z0-9_-]{1,30}" required>
            <h3><label for="password_sign_in">password</label></h3><input type="password"  name="password_sign_in" pattern="[A-Za-z0-9_-]{1,30}" required>
            <input type="submit" id="submit_sign_in" name="submit_sign_in">    
        </form>
    </div>

  


</body>
</html>

