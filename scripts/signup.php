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
        $usertype = "user";

        //create account
        $insert = $conn->prepare("INSERT INTO TABLE users(username, useremail, userpass, usertype) VALUES (:username, :useremail, :userpass, :usertype)");
        $insert->execute([
            ":username"=>$username,
            ":useremail"=>$useremail,
            ":userpass"=>password_hash($userpass, PASSWORD_DEFAULT),
            ":usertype"=>$usertype,
        ]);
        echo "<script>alert('Account Created Successfully')</script>";
    }
?>