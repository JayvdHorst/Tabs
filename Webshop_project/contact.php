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
    <!--Contact CSS-->
    <link href="css/contact.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
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
        <div class='row container'>
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                    <!-- Wrapper for slides -->
                        <div class="item active">
                            <h2><strong>Gametivity</strong> always striving for the better...</h2>
                        </div>
                        <div class="item">
                            <h2>Welcome to our contact page!</h2>
                            <p>Also a little about <strong>Gametivity</strong> :)</p>
                        </div>
                </div>
            </div>
        </div>
        <h3 class="text-center">Read some more about us!</h3>
        <hr>
        <div class="pagination">
            <h4><strong>Gametivity</strong> is made by some students who tought it would be fun to screw around with a webshop. This was a project we made on our school and we learned a lot. We had a blast working on this project, thankyou :D</h4>
            <h4>- Jay & Victor</h4>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well well-sm">
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <h4>Address</h4>
                                        <div>
                                            Contactweg 36,1014 AN<br />
                                            Amsterdam<br />
                                            +31 6 209003307<br />
                                            Gametivity@company.com<br />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="panel panel-default">
                            <div class="text-center header"><strong>Gametivity</strong></div>
                            <div class="panel-body text-center">
                                <h4>Where are we?</h4>
                                <hr />
                                <div id="map1" class="map">
                                </div>
                            </div>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!--jQuery ajax-->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- ContactUs JavaScript -->
    <script src="js/contactus.js"></script>

    <!--Plugin Maps-->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>

</html>
