<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "logged in as $sessie";
}else {
    echo "not logged in";
}
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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>
    <!--Logo-->
    <!--<a class="main_image" href="#"><img src="images/a1.png" alt="logo" style="width:100px;height:100px;"></a>-->
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Gametivity</a>
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
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#myModal" href="#">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!--<div class="col-md-9">-->

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/banner1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/banner2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/banner3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!--first product-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/cover_fallout4.jpg" alt="Fallout 4">
                            <div class="caption">
                                <h4 class="pull-right">$49.99</h4>
                                <h4><a href="#">Fallout 4</a>
                                </h4>
                                <p>Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--second product-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/cover_witcher3.jpg" alt="Witcher 3">
                            <div class="caption">
                                <h4 class="pull-right">$49.99</h4>
                                <h4><a href="#">Witcher 3</a>
                                </h4>
                                <p>The Witcher is a story-driven, next-generation open world role-playing game, set in a visually stunning fantasy universe, full of meaningful choices and impactful consequences. </p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--third product-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/cover_arma3.jpg" alt="Arma 3">
                            <div class="caption">
                                <h4 class="pull-right">$49.99</h4>
                                <h4><a href="#">Arma 3</a>
                                </h4>
                                <p>Experience true combat gameplay in a massive military sandbox. Deploying a wide variety of single- and multiplayer content, over 20 vehicles and 40 weapons, and limitless opportunities for content creation.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--fourth product-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/cover_citySkylines.jpg" alt="Cities Skyline">
                            <div class="caption">
                                <h4 class="pull-right">$49.99</h4>
                                <h4><a href="#">Cities Skylines</a>
                                </h4>
                                <p>Cities: Skylines is a modern take on the classic city simulation. The game introduces new game play elements to realize the thrill and hardships of creating and maintaining a real city. </p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--fifth product-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/cover_gtav.jpg" alt="gtaV">
                            <div class="caption">
                                <h4 class="pull-right">$49.99</h4>
                                <h4><a href="#">Grandtheft auto V</a>
                                </h4>
                                <p>GTA Online Lowriders: Custom Classics is now available for PC. Expand your Lowrider collection with the Vapid Slamvan, the Dundreary Virgo Classic and the Faction Custom Donk..</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--sixth product-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/cover_undertale.jpg" alt="undertale">
                            <div class="caption">
                                <h4 class="pull-right">$49.99</h4>
                                <h4><a href="#">Undertale</a>
                                </h4>
                                <p>UNDERTALE! The RPG game where you don't have to destroy anyone.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            <!--</div>-->

        </div>

    </div>
    <!-- /.container -->
    <!--login modal-->
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
                                    <input type="submit" name="submit_btn" id="submit" value="Login"/>
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
                    <p>Terms & Conditions</p>
                </div>
                <div class="col-md-3">
                    <p>About Acme</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
