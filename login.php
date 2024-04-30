<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishna University</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <section class="Sub-header">
        <?php include "navbar.php" ?>
        <h1>Login</h1>
    </section>


    <!--  ------------------------------SIGNUP content------------------------------- -->
    <div class="aa">
    <?php
    if (isset($_GET['Alert']) && $_GET['Alert'] == 2) {

        echo '
    <div   style="background-color: #f7a3a3; margin:10px; padding:10px; text-align:center; font-size: 25px;">
  <strong>Error! </strong> Password not correct.!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    }
    else if (isset($_GET['Alert']) && $_GET['Alert'] == 1) {

        echo '
 <div  style="background-color: #1df2a3; margin:10px; padding:10px; text-align:center; font-size: 25px;">
<strong>Success!</strong>Login successfully.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    }else if (isset($_GET['Alert']) && $_GET['Alert'] ==3) {

        echo '
 <div  style="background-color: #b68885; margin:10px; padding:10px; text-align:center; font-size: 25px;">
<strong> Error!</strong>login failed  email not found.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    } ?>
        <section class="signup">

            <div class="row" id="mar-row">
                <div class="signup-col">
                    <div class="tex">
                        <h1>Login Now</h1>
                        <p>Get started with your free account</p>
                        <img src="https://source.unsplash.com/random/900×700/?dark,nature,snowflake" alt="" id="ssimg">
                    </div>
                </div>
                <div class="signup-col">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>LOGIN NOW</h1>

                        </div>
                        <form action="parts\_handleLogin.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="uemail">Email address</label>
                                    <input type="email" id="uemail" name="uemail" required>
                                    <span style="color:red; margin-bottom:5px;"> <?php
                                    if (isset($_GET['Alert']) && $_GET['Alert'] == 3) {
                                        echo "Ooo...!! Email not found!! , please first signUp";
                                    
                                    }
                                    ?> </span>

                                </div>
                                <!-- <div class="mb-3">
                                    <label for="loginEmail">UserName</label>
                                    <input type="text" id="loginEmail" name="username" required>
                                </div> -->

                                <div class="mb-3">
                                    <label for="loginPass">Password</label>
                                    <input type="password" id="loginPass" name="loginPass" required>
                                    <div class="output">
                                        <span style="color:red; margin-bottom:6px ;" class="outputt"> </span>
                                    </div>
                                </div>
                                <span style="color:red; margin-bottom:6px ;" class="outputt"> 
                                <?php
                                if (isset($_GET['Alert']) && $_GET['Alert'] == 2) {
                                    echo "Pasword Not match!, try agaim!";

                                }
                                ?></span>
                                <button type="submit" class="btn-signup">Login</button>

                            </div>
                        </form>

                    </div>








                </div>
            </div>
        </section>

    </div>






    <!-- --------------------------------footer---------------------------- -->
    <?php include "footer.php" ?>
    <!-- <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2200);
        }
    </script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->

    <script src="password-checker.js"> </script> //password-checker
 
</body>

</html>