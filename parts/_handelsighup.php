

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php';
$user_email = $_POST["uemail"];
$user_name = $_POST["username"];
$user_pass = $_POST["pass"];
$user_cpass = $_POST["cpass"];

if($user_pass!=$user_cpass){
    header("Location:  /new project\signup.php?Alert=1");
    exit();
}else if (strlen($user_pass) <= 8){
    header("Location:  /new project\signup.php?Alert=2");
    exit();
}else if (!preg_match("#[0-9]+#", $user_pass)){
    header("Location:  /new project\signup.php?Alert=3");
    exit();
}else if (!preg_match("#[a-z]+#", $user_pass)){
    header("Location:  /new project\signup.php?Alert=4");
    exit();
} else if(!preg_match("#[A-Z]+#", $user_pass)){
    header("Location:  /new project\signup.php?Alert=5");
    exit();
}


$sql = "SELECT * FROM users WHERE email='$user_email'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
// echo  $num;
if($num > 0){
       // echo "user exits";
         
        header("Location:  /new project\signup.php?Alert=7");
        exit();
}else{
   // $hash = password_hash($user_pass, PASSWORD_DEFAULT);
    //$hash = md5($user_pass);
    $sql1 = "INSERT INTO users ( username, email, password, date) VALUES ('$user_name', '$user_email', '$user_pass', current_timestamp());";
    $result1 = mysqli_query($conn, $sql1);
    // $num = mysqli_num_rows($result1);
    // echo var_dump($result1);

 header("Location: /new project\signup.php?Alert=8");
}
}
?>