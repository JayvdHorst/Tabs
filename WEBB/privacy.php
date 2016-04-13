<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gametivity">
    <meta name="author" content="Jay van der Horst">
    <title>webshop</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- Custom CSS Privacy-->
    <link href="css/privacy.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>
<!--Logo-->
<!--<a class="main_image" href="#"><img src="images/a1.png" alt="logo" style="width:100px;height:100px;"></a>-->
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Gametivity</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Games</a>
                </li>
                <li>
                    <a href="services.php">Services</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a data-toggle="modal" data-target="#myModal" href="#">Log in</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="img-thumbnail">
                <h4 class="text-center">General Information</h4>
                    <label class="col-xs-3 control-label"><img src="images/a1.png" width="100"></label>
                    <div class="col-xs-9">
                        <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                            <p><b>&copy; Gametivity respects the privacy of its online visitors and users of its products and services. Gametivity recognizes the importance of protecting information collected from users and has adopted this privacy policy to inform users about how Gametivity gathers, stores, and uses information derived from their use of Gametivity products and services.</p>
                            <p>-This policy is current as of its last revision date. However, please note that this policy may be changed from time to time.</p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="img-thumbnail">
                <h4 class="text-center">Collection of Information</h4>
                <label class="col-xs-3 control-label"><img src="images/a1.png" width="100"></label>
                <div class="col-xs-9">
                    <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                        <p>By using Gametivity's online site, products and services, users agree that Gametivity collects and processes the personally identifiable information (as defined right of here) they provide by creating a Gametivity account, by purchasing items, or during any exchange with your Gametivity's account. Gametivity will not share any personally identifiable information with other parties except as described in this policy.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="img-thumbnail">
                <h4 class="text-center">Personally Identifiable Information</h4>
                <label class="col-xs-3 control-label"><img src="images/a1.png" width="100"></label>
                <div class="col-xs-9">
                    <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                        <p>"Personally identifiable information" is information that can be used to uniquely identify a user such as name, address or credit card number.</p>
                        <p>You may be asked to provide personally identifiable information during the sign in process, and then in connection with the use of Gametivity's products and services.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="img-thumbnail">
                <h4 class="text-center">Age and Responseability</h4>
                <label class="col-xs-3 control-label"><img src="images/a1.png" width="100"></label>
                <div class="col-xs-9">
                    <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                        <p>Gametivity will not knowingly collect personally identifiable information from any person under the age of 14. Gametivity encourages parents to instruct their children to never give out personal information when online.</p>
                        <p>Parents who are concerned about the transfer of personal information from their children may contact us.</p>
                        <p>Gametivity's content is 16+ as of sometimes 18+ Gametivity is not responseable for any fake accounts.</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="img-thumbnail">
                <h4 class="text-center">About Acme</h4>
                <label class="col-xs-3 control-label"><img src="images/a1.png" width="100"></label>
                <div class="col-xs-9">
                    <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                        <p><b>Acme's mission is to provide buyers from all around the world the possibility to buy video games at fair price with minimal hassle through an innovative platform.</p>
                        <p>Since its launch, Acme has quickly become the largest alternative to Steam, Origin and Battle.net key's/video games with millions of loving customers.</p>
                        <p>To ensure maximum satisfaction by Gametivity for Acme, customers enjoy the benefit of optional customer support at any time!</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="img-thumbnail">
                <h4 class="text-center">Contact Gametivity</h4>
                <label class="col-xs-3 control-label"><img src="images/a1.png" width="100"></label>
                <div class="col-xs-9">
                    <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                        <a href="contact.php"><strong>Click here</strong></a><p><b>to visit our contact page.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Login</a></li>
                        <li><a href="#tab2" data-toggle="tab">Register</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <?php

                            if(isset($_POST['submit_btn'])) {
                                $username = $_POST['name'];
                                $password = $_POST['pwd'];

                                $userData = file_get_contents('accounts.txt');


                                $inputUser = $username . "||" . $password;

                                $isItThere = strpos($userData, $inputUser);
                                if ($isItThere === false) {
                                    echo "$username  bestaat niet";
                                    session_start();
                                    $_SESSION['user'] = "";

                                    session_unset();

                                    session_destroy();
                                } else {
                                    if($username == "" || $password ==""){
                                        echo "voer uw gebruiksgegevens in";
                                    }else {
                                        echo "$username komt voor op pos: $isItThere<br>";
                                        session_start();
                                        $_SESSION['user'] = $username;
                                    }
                                }
                            }

                            ?>

                            <form action="" method="POST">
                                <h1>Log in</h1>
                                <p>
                                    <label>username</label><input type="text" name="name"/>
                                    <label>password</label><input type="password" name="pwd"/>
                                    <br/>
                                    <br/>
                                </p>
                                <input type="submit" name="submit_btn" id="submit" value="Log in"/>
                            </form>

                        </div>
                        <div class="tab-pane" id="tab2">
                            <?php

                            if(isset($_POST['submit_btn']))
                            {
                                $username = $_POST['name'];
                                $password = $_POST['pwd'];
                                $text = $username . "||" . $password . "||" . "\r\n";
                                $fp = fopen('accounts.txt', 'a+');
                                $userData = file_get_contents('accounts.txt');
                                $inputUser = $username . "||" . $password;
                                $isItThere = strpos($userData, $inputUser);
                                if ($isItThere > 0)  {
                                    echo "$username  bestaat al";

                                } else{
                                    if(fwrite($fp, $text)){
                                        echo 'saved';
                                        echo "<script language=\"javascript\">
                                                window.location.href = \"checkpass.php\"
                                               </script>";
                                    }
                                }
                                fclose ($fp);
                            }

                            ?>
                            <form action="" method="POST">
                                <h1>Register</h1>
                                <p>
                                    <label>username</label><input type="text" name="name"/>
                                    <label>password</label><input type="password" name="pwd"/>
                                    <br/>
                                    <br/>
                                </p>
                                <input type="submit" name="submit_btn" id="submit" value="Register"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-md-3">
                <p>Copyright &copy; Gametivity</p>
            </div>
            <div class="col-md-3">
                <a href="privacy.php"><p>Terms & Conditions</p></a>
            </div>
            <div class="col-md-3">
                <a href="privacy.php" ><p>About Acme</p></a>
            </div>
        </div>
    </footer>

</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!--jQuery ajax-->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
