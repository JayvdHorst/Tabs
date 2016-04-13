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
<!--                <div class="hi"></div>-->
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
        <br />
        <br />
        <br />

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            This page has a lot of frequently asked questions , related to <strong>Gametivity</strong> and its store. If you cannot find an answer to your question,
            make sure to contact us.
        </div>

        <br />

        <div class="panel-group" id="accordion">
            <div class="faqHeader">FAQ</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Can I cancel my order?</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        To cancel your <strong>Gametivity</strong> order, follow these steps. Go to the homepage on your <strong>Gametivity</strong> account and click on cart. On this page you'll be able to remove your order, with simply one click!
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Can I get a refund?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        unfortunately not at this point of time. read <strong>Gametivity</strong>'s terms and conditions for more information.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">What payment methods are there?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        On <strong>Gametivity</strong> we have most of the basic payment methods.<br>
                        -iDeal<br>
                        -PayPal<br>
                        -Creditcard Mastercard / Visa<br>
                        -Paysafe
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">What is our averge delivery time?</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        <strong>Gametivity</strong>'s delivery time is within 30minutes!
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">My delivery is taking to long?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                        At this moment please contact us with the form below. Make sure you have your payment confirmation (pdf) if u didn't get a pdf please contact us as soon as posible.
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <h3 class="text-center">Can't any of these answer your question? Contact us below!</h3>
    <div class="container">
        <hr><br>
        <div class="faqHeader">Contact us</div>
    <form id="contact-form" method="post" action="contact.php" role="form">

        <div class="messages"></div>

        <div class="controls">

            <div class="row">
                <div class="col-md-6">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required">
                </div>
                <div class="col-md-6">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required">
                </div>
                <div class="col-md-6">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required">
                </div>
                <div class="col-md-6">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                </div>
                <div class="col-md-12">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Your Question *" rows="4" required="required"></textarea>
                </div>
                <div class="col-md-12">
                    <br>
                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                </div>
                <div class="col-md-12">
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                </div>
            </div>
        </div>

    </form>
    </div>

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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- contact -->
    <script src="js/contact.js"></script>
</body>

</html>
