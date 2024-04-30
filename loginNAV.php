<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION["loggedin"]==true){
echo'<la><a href="" id="profile" ><img src="eduford_img\nis.jpg"> '.$_SESSION['username'].'  </a> </la>
 <la> <a href="logout.php" class="logsin">LOGOUT</a></la>';
}else{
    echo' <la> <a href="login.php" class="logsin">LOGIN</a></la>
<la> <a href="signup.php" class="logsin">SIGNUP</a></la>';
}
?>
