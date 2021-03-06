<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Cross Worship Center</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = "Church Contact Form";
$to ="example@domain.com";
$subject = "Message from Church Contact Form";

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if (!$_POST['name']) {
    $errName = 'Please enter your name';
}

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = "Please enter a valid email address";
}

?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <!-- <i class="fa fa-play-circle"></i> -->  <span class="light" style="font-size: 14px">The Cross Worship Center</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Beliefs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Community</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#outreach">Outreach</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#media">Media</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#contact">Staff</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading" style="">The Cross</h1>
                        <h2 class="brand-subtitle">Worship Center</h2>
                        <p class="intro-text">Sundays at 10AM and Wednesdays at 7PM<br>6895 Via Del Oro, San Jose, CA 95119</p>
<!-- style="font-weight: bold; text-shadow: 0px 0px 3px black,  1px 1px #000;" text shadow if needed for letters on lighter backgrounds-->

                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Beliefs Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Beliefs</h2>
                <p>The Cross Worship Center is a ministry that believes in God the Father, God the Son, and God the Holy Spirit. </p>
                <p>The sole basis of our beliefs is contained in God’s written and infallible Word, the Holy Bible.</p>
                <p>Click here to learn more about what we believe.</p>
                <a href="#" target="_blank" class="btn btn-contact btn-lg">Visit Beliefs Page</a>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Community</h2>
                    <p>At the Cross Worship Center, we recognize that people have a God-given need for community. Click below to get find a place to get plugged in.</p>
                    <a href="#" class="btn btn-default btn-lg">Visit Community Page</a>
                </div>
            </div>
        </div>
    </section>

   <!--  Outreach Section -->
  <section id="outreach" class="content-section text-center" style="padding-top: 0px;">
        <div class="outreach-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 style="padding-top: 200px;">Outreach</h2>
                    <p>"It is better to give than to receive."</p>
                    <p>Click below to find where you can use your gifts, talents, and skills to help those in need.</p>
                    <a href="#" class="btn btn-outreach btn-lg">Visit Outreach Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Us</h2>
                <p>Questions? Comments? Need prayer? Feel free to get in touch with us, even to just say hello!</p>
                
               <!-- Button trigger modal -->
                <button type="button" class="btn btn-contact btn-lg" data-toggle="modal" data-target="#contact-us">
                  Contact Us
                </button>

                <!-- Modal -->
        <div class="modal fade" id="contact-us">
            
            <div class="modal-dialog">
            
              <div class="modal-content">
            
                <div class="modal-header">
            
                  <button class="close" data-dismiss="modal">&times;</button>
            
                  <h4 class="modal-title">Contact Us</h4>
            
                </div>
            
                <div class="modal-body">

                <form method="post">

                   <div class="input-group contact-input">

                    <label for="first-name">Name</label>
                    <input type="text" class="form-control modal-sign" id="name" name="name" placeholder="John" />
                    <?php echo "<p class='text-danger'>$errName</p>"; ?>

                  </div>

                  <div class="input-group contact-input">

                    <label for="email">Valid Email</label>
                    <input type="email" class="form-control modal-sign" id="email" name="email" placeholder="example@example.com" />
                    <?php echo "<p class='text-danger'>$errEmail</p>"; ?>


                  </div>

                  <div class="form-group">

                    <label for="comment">Comment:</label>

                    <textarea class="form-control" name="message" placeholder="What's your question, comment, or concern?"></textarea>
                    <?php echo "<p class='text-danger'>$errMessage</p>"; ?>


                  </div>
                  
                  </form>
            
                </div>
            
                <div class="modal-footer">
                  <button class="btn btn-default" data-dismiss="modal">Close</button>
                  <button class="btn btn-success"><input id="submit" name="submit" type="submit" value="Send It!" class="btn btn-primary">
        </button>
        </div>

                </div>

              </div>

            </div>

          </div>


                <p></br>And make sure to follow the Cross on social media!</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#" target="_blank" class="btn btn-contact btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/TheCrossWorshipCenter" target="_blank" class="btn btn-contact btn-lg"><!-- <i class="fa fa-github fa-fw"></i> --> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-contact btn-lg" target="_blank"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Map Section -->
    <div id="map">

        <iframe width="100%" height="400px" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB4CM3wDzrihJJkiclqBegxCWb0qi_DgzE&q=6895+Via+Del+Oro,San+Jose,CA+95119"></iframe>

    </div>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; The Cross Worship Center 2015</p>
            <p style="font-size: 1em;"> Site by Zach Nagatani. Bootstrap template provided by Start Bootstrap</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
