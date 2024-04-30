<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $user_email = $_POST["uemail"];
    $user_pass = $_POST["loginPass"];

   $sql = "SELECT * FROM `users` WHERE email='$user_email'";
  //  $result = mysqli_query($conn, $sql);
   // $num = mysqli_num_rows($result);
    // if ($num == 0) {
    //     header("Location: /Approject/index.php?Alert=2");
    //     exit();
    // } else {

    //     $row = mysqli_fetch_assoc($result);

    //     if (password_verify($user_pass, $row['password'])) {
    //         $email = $row["email"];
    //         $username = $row["username"];
    //         session_start();
    //         $_SESSION["username"] = $username;
    //         $_SESSION["success"] = "You are now logdin";
    //         header("Location: /Approject/index.php");
    //         exit();
    //     } else {
    //         header("Location: /Approject/index.php?Alert=3");
    //         exit();
    //     }



    // }

    //$sql = "SELECT * FROM `users` WHERE  user_email = '$email'";


    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        // echo $row['username'];password_verify($user_pass, $row['password'])$user_pass = $row['username']
         if($user_pass == $row['password']) {
             session_start();
             $_SESSION['loggedin'] = TRUE;
             $_SESSION['username'] = $row['username'];
             header("Location: /new project\login.php?Alert=1");//loginn succse-1
            exit();
        }else{
        header("Location: /new project\login.php?Alert=2"); //password not match-2
        exit();
        }
        

    }else{
        header("Location: /new project\login.php?Alert=3");//login fail email not found-3
         exit();
}
 
}


?>