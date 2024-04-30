<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishna University</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section class="Sub-header">
        <?php include "navbar.php" ?>
        <h1>Registration</h1>
    </section>


    <!--  ------------------------------Registration content------------------------------- -->

 
<?php

 
if(isset($_SESSION['username']) && $_SESSION["loggedin"]==true){

echo '

<div class="row" style="padding:30px">
            <div class="registration-form">
                <!-- <fieldset> -->
                    <legend>Resistration Form</legend>
                     
                        <legend id="legend">Personal Details</legend>
                        <table cellpadding="10">

                            <tr>
                                <td>
                                    <table>
                                        <tr>
                                         <td> Candidates Name : </td>
                                            <td><input id="name" type="text"></td>
                                        </tr>

                                        <tr>
                                            <td> Mother Name : </td>
                                            <td><input id="mother name" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Identity Type : </td>
                                            <td>
                                                <select id="select">
                                                    <option>choose an option</option>
                                                    <option value="adhar">Adhar Card</option>
                                                    <option value="pan ">PAN CARD</option>
                                                    <option value="college id"> College ID</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Enter Roll Number : </td>
                                            <td><input type="text"> </td>
                                        </tr>
                                    </table>

                                </td>
                                <td>

                                    <table style="color: white;">

                                        <tr>
                                            <td> Fathers Name : </td>
                                            <td><input type="text"></td>
                                        </tr>

                                        <tr>
                                            <td>date : </td>
                                            <td><input type="date" name="" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Gender : </td>
                                            <td>
                                                <select id="select">
                                                    <option>Choose one option</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>other</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>


                        </table>

                     <br>
                     
                        <legend id="legend">Educational Details</legend>
                        <table cellpadding="10">

                            <tr>
                                <td>
                                    <table  >
                                        <tr>
                                            <td>Petcentage In 10<sup>nth</sup></td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>10<sup>nth</sup> Roll no. </td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td> 10<sup>nth</sup> Marksheet </td>
                                            <td><input type="file"></td>
                                        </tr>


                                    </table>

                                </td>
                                <td>

                                    <table>
                                        <tr>
                                            <td>Percentage In 12<sup>th</sup> </td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>12<sup>th</sup> Roll No.</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td> 12<sup>th</sup>Marksheet</td>
                                            <td><input type="file"></td>
                                        </tr>


                                    </table>

                                </td>
                            </tr>


                        </table>

                     <br>
                     
                        <legend id="legend">Contact Details</legend>
                        <table cellpadding="10">

                            <tr>
                                <td>
                                    <table>
                                        <tr>
                                            <td>City/Town/Village</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>District </td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td> Email Address </td>
                                            <td><input type="email"></td>
                                        </tr>
                                        <tr>
                                            <td>Landline Number</td>
                                            <td> <input type="tel"></td>
                                        </tr>


                                    </table>

                                </td>
                                <td>

                                    <table>
                                        <tr>
                                            <td>Locality </td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>State</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td> Pin Code</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Number(+91)</td>
                                            <td> <input type="tel" required></td>
                                        </tr>


                                    </table>

                                </td>
                            </tr>


                        </table>

                     <br>

                    <button class="hero-btn">Submit</button>

                <!-- </fieldset> -->


            </div>

            </div>';
        }
            else{

              echo' <div style=" height: 100vh;" ><div   style="background-color: #f7a3a3; margin:10px; padding:10px; text-align:center; font-size: 25px;
              height: 50vh;  text-align:center;   margin-top:80px;">
              <h2>Please Login first <h2>
                <p></p>
              </div></div>';
            }

            ?>









 
   


























    <!-- --------------------------------footer---------------------------- -->
    <?php include "footer.php" ?>

</body>

</html>