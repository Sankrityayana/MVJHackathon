<?php include "./config.php"?>
<?php 
    if(!isset($POST['username'])) {
        //recdirect to login
    }

    if(isset($POST['submit'])){
        //Get details from user
        $useremail = $POST['username'];
        $username = $POST['username'];
        $userpass = $POST['userpass'];

        //create account
        $insert = $conn->prepare("INSERT INTO TABLE")
    }
?>