<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require('/home/asinghg1/db.php');
require ('includes/check-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="gueststyle.css">

    <title>Admin</title>

    <link rel="icon" type="image/jpg" href="guestbook.jpg">

</head>
<body>

<div class="container">

    <h1>Guestbook Summary</h1>

<div class="container-fluid">
    <ul class="navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
</div>

    <table id="guest-table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Job Title</th>
            <th>Company</th>
            <th>Linkedin</th>
            <th>Email</th>
            <th>How we met?</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        </thead>

        <?php

        //define query
        $sql = 'SELECT * FROM guestbook';
        //send query to db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);


        //process result
        foreach ($result as $row) {

            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $job = $row['job'];
            $company = $row['company'];
            $linkin = $row['linkedin'];
            $email = $row['email'];
            $weMet = $row['how_we_met'];
            $message = $row['message'];
            $date = $row['date_stamp'];

            echo "
        <tr>
        
            <td class='border'>$fname</td>
            
            <td class='border'>$lname</td>
            
            <td class='border'>$job</td>
            
            <td class='border'>$company</td>
            
            <td class='border'>$linkin</td>
            
            <td class='border'>$email</td>
            
            <td class='border'>$weMet</td>
            
            <td class='border'>$message</td>
            
            <td class='border'>$date</td>
            
        </tr>";
        }
        ?>
    </table>

</div>



<a href="guestbook.html"><footer class="text-center">Home</footer></a>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#guest-table').DataTable();
</script>
</body>
</html>