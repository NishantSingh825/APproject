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
        <h1>SignUp</h1>
    </section>


    <!--  ------------------------------SIGNUP content------------------------------- -->

<div class="aa">
    <?php
    if (isset($_GET['Alert']) && $_GET['Alert'] == 7) {

        echo '
    <div  style="background-color: #ffcd7b; margin:10px; padding:10px; text-align:center; font-size: 25px;">
  <strong>Error!</strong> Email already exist.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    }
    if (isset($_GET['Alert']) && $_GET['Alert'] == 8) {

        echo '
 <div style="background-color: #1df2a3; margin:10px; padding:10px; text-align:center; font-size: 25px;">
<strong>Success!</strong>You account was created successfully.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    } ?>
    
        <section class="signup">

            <div class="row" id="mar-row">
                <div class="signup-col">
                    <div class="tex">
                        <h1>SignUp Now</h1>
                        <p>Get started with your free account</p>
                        <img src="slide/ss.jpg" alt="" id="ssimg">
                    </div>
                </div>
                <div class="signup-col">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>SignUp Now</h1>

                        </div>
                        <form action="parts/_handelsighup.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="uemail">Email address</label>
                                    <input type="email" id="uemail" name="uemail" required>
                                    <span style="color:red" margin-bottom:5px;> <?php
                                    if (isset($_GET['Alert']) && $_GET['Alert'] == false) {
                                        echo "Email is already use";
                                    }
                                    ?> </span>

                                </div>
                                <div class="mb-3">
                                    <label for="username">UserName</label>
                                    <input type="text" id="username" name="username" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="pass" required>
                                    <div class="output">
                                        <span style="color:red; margin-bottom:6px ;" class="outputt"> </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="cpass">Confirm Password</label>
                                    <input type="password" id="cpass" name="cpass" required>
                                    <span style="color:red" margin-bottom:5px;> <?php
                                    if (isset($_GET['Alert']) && $_GET['Alert'] == 1) {
                                        echo "Password Not Match! please try again.";
                                    }
                                    ?> </span>
                                </div>
                                <?php
                                if (isset($_GET['Alert']) && $_GET['Alert'] == 2) {
                                    echo "At least 8 digits";

                                } else if (isset($_GET['Alert']) && $_GET['Alert'] == 3) {
                                    echo "At least one digits";
                                } else if (isset($_GET['Alert']) && $_GET['Alert'] == 4) {
                                    echo "At least one lower char";
                                } else if (isset($_GET['Alert']) && $_GET['Alert'] == 5) {
                                    echo "At least one upper case";
                                }
                                ?>
                                <button type="submit" class="btn-signup">SignUp</button>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>-->
    <script src="password-checker.js"> </script>  
</body>

</html>
