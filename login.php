<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

//Initialize variables
$err = false;
$username = "";

//If the form has been submitted
if(!empty($_POST)) {

    //Get username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo $username . ", " . $password;

    //Dummy variables
    $user = 'admin';
    $pass = '@dm1n';


    if ($username == $user && $password == $pass) {

        //Store username in the session array
        $_SESSION['un'] = $username;

        //Redirect user to index.php
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "index.php";
        header("location: $page");
    } else {

        //Set error flag to true
        $err = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="gueststyle.css">
    <link rel="icon" type="image/jpg" href="guestbook.jpg">


    <style>
        .err1 {
            color: darkred;
        }
    </style>
</head>
<body>
<div class="container">

    <h1>Sign My Guestbook: Login</h1>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control"
                   id="username" name="username"
                   value="<?php echo $username; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>

        <?php
        if ($err) {
            echo '<span class="err1">Incorrect login</span><br>';
        }
        ?>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>

<!--link to homepage-->
<a href="guestbook.html"><footer class="text-center">Home</footer></a>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>