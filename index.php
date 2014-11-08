<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Rainer Karcher" />
	<meta name="contact" content="hello@rainerkarcher.com" />
	<meta name="copyright" content="Copyright (c)2014 Rainer Karcher. All Rights Reserved." />
	<meta name="description" content="Rainer Karcher is a web developer and Linux systems administrator based in Kansas City, MO." />
	<meta name="keywords" content="rainer karcher, web development, web design, html, css, mysql, javascript, php, linux, developer, wizards" />
<!--<link rel="icon" type="image/ico" href=""/>-->   
    <title>Rainer Karcher</title>

    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/misc.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    
    <!-- jQuery Version 1.11.1 -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script type="text/javascript">
		$(document).ready(function(){
			$(".btn").click(function(){
				$("#contact-modal").modal('show');
			});
		});
	</script>
</head>

<body>
    <!-- Begin Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://rainerkarcher.com">Rainer Karcher</a>
            </div> <!-- End .navbar-header -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.php">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="blog" target="_blank">Blog</a></li>
				    <li><a href="#contact-modal" class="btn">Contact</a></li>
                </ul>
            </div> <!-- End #bs-example-navbar-collapse-1 .collapse .navbar-collapse -->
        </div> <!-- End .container -->
    </nav> <!-- End Navigation -->

    <!-- Begin Contact Modal -->
    <div id="contact-modal" class="modal fade" style="margin:10%;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Want to get in touch?</h4>
                </div>
                <div class="modal-body">
                	<br /><br />
                    <h5 class="text-center">Feel free to drop me a line at <a href="mailto:hello@rainerkarcher.com">hello@rainerkarcher.com</a><br /> and I'll try to get back to you as soon as possible!</h5><br />
                    <h5 class="text-center">(Or, if you'd prefer a phone conversation, that's fine, too - <br />please see the number on my <a href="img/resume.pdf" target="_blank"> resume</a>.)</h5><br />
                    <h5 class="text-center">Thanks for stopping by!</h5>
                    <br /><br />
                </div> <!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div> <!-- .modal-content -->
        </div> <!-- End .modal-dialog -->
    </div> <!-- End Contact Modal -->
    
    <!-- Begin Jumbotron/Header -->
    <div class="intro-header" style="color:#fff; background: url(http://rainerkarcher.com/img/DSC04393.jpg) no-repeat center center;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Rainer Karcher</h1>
                        <h3>Web Developer & Systems Administrator</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li><a href="http://linkedin.com/in/rtkarcher" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">LinkedIn</span></a></li>
                            <li><a href="https://github.com/rtkarcher" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a></li>
                            <li><a href="http://plus.google.com/+RainerKarcher" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-google-plus-square"></i> <span class="network-name"> Google +</span></a></li>                            
                        </ul>
                    </div> <!-- End .intro-message -->
                </div> <!-- End .col-lg-12 -->
            </div> <!-- End .row -->
        </div> <!-- End .container -->
    </div> <!-- End .intro-header -->
    <!-- End Jumbotron/Header -->
    
    <!-- Begin Page Content -->
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Chapter 7. <br /> A Mad Tea-Party</h2>
                    <p class="lead">'How do you know I'm mad?' said Alice. 'You must be,' said the Cat, 'or you wouldn't have come here.' Alice didn't think that proved it at all; however, she went on 'And how do you know that you're mad?' 'To begin with,' said the Cat, 'a dog's not mad. You grant that?' 'I suppose so,' said Alice. 'Well, then,' the Cat went on, 'you see, a dog growls when it's angry, and wags its tail when it's pleased. Now I growl when I'm pleased, and wag my tail when I'm angry. Therefore I'm mad.' 'I call it purring, not growling,' said Alice.<br /><br />  'Call it what you like,' said the Cat. 
                    </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <br /><br /><img class="img-responsive" src="img/380_wpm_hires.jpg" alt="">
                </div>
            </div>
        </div>      <!-- /.container -->
    </div>  <!-- /.content-section-a -->

    <div class="content-section-b" style="background:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Chapter 8. <br>The Queen's Croquet-Ground</h2>
                    <p class="lead">'Do you play croquet with the Queen to-day?' 'I should like it very much,' said Alice, 'but I haven't been invited yet.' 'You'll see me there,' said the Cat, and vanished. Alice was not much surprised at this, she was getting so used to queer things happening. While she was looking at the place where it had been, it suddenly appeared again. 'By-the-bye, what became of the baby?' said the Cat. 'I'd nearly forgotten to ask.' 'It turned into a pig,' Alice quietly said, just as if it had come back in a natural way. 'I thought it would,' said the Cat, and vanished again. Alice waited a little, half expecting to see it again, but it did not appear, and after a minute or two she walked on in the direction in which the March Hare was said to live.</p>
                </div> <!-- End .col-lg-5 .col-lg-offset-1 .col-sm-push-6 .col-sm-6 -->
                <div class="col-lg-5 col-sm-pull-6 col-sm-6">
                    <br /><br /><br /><img class="img-responsive" src="img/stock/enhanced-buzz-6818-1399908167-16.jpg" alt="">
                </div> <!-- End .col-lg-5 .col-sm-pull-6 .col-sm-6 -->
            </div> <!-- End .row -->
        </div> <!-- End .container -->
    </div> <!-- End .content-section-b -->

    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Next chapter: <br>The Mock Turtle's Story</h2>
                    <p class="lead">They very soon came upon a Gryphon, lying fast asleep in the sun. 'Up, lazy thing!' said the Queen, 'and take this young lady to see the Mock Turtle, and to hear his history. I must go back and see after some executions I have ordered,' and she walked off, leaving Alice alone with the Gryphon. Alice did not quite like the look of the creature, but on the whole she thought it would be quite as safe to stay with it as to go after that savage Queen, so she waited. The Gryphon sat up and rubbed its eyes: then it watched the Queen till she was out of sight, then it chuckled. 'What fun!' said the Gryphon, half to itself, half to Alice. 'What is the fun?' said Alice. 'Why, she,' said the Gryphon. 'It's all her fancy, that - they never executes nobody, you know. Come on!'<br /><br />'Everybody says "come on!' here,' thought Alice, as she went slowly after it; 'I never was so ordered about in all my life, never!'
                    </p>
                </div> <!-- End .col-lg-5 .col-sm-6 -->
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <br /><br /><br /><img class="img-responsive" src="img/stock/psychic-torment.jpg" alt="">
                </div> <!-- End .col-lg-5 .col-lg-offset-2 .col-sm-6 -->
            </div> <!-- End .row -->
        </div> <!-- End .container -->
    </div> <!-- End .content-section-a -->
    <!-- End Page Content -->

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Stay in touch:</h2>
                </div> <!-- End .col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li><a href="http://linkedin.com/in/rtkarcher" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a></li>                        
                        <li><a href="https://github.com/rtkarcher" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a></li>
                        <li><a href="http://plus.google.com/+RainerKarcher" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-google-plus-square"></i> <span class="network-name">Google +</span></a></li>
                    </ul>
                </div> <!-- End .col-lg-6 -->
            </div> <!-- End .row -->
        </div> <!-- End .container -->
    </div> <!-- End .banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="about.php">About</a></li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li class="footer-menu-divider">&sdot;</li>                        
	                    <li><a href="blog" target="_blank">Blog</a></li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="mailto:hello@rainerkarcher.com">Contact</a></li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Rainer Karcher 2014. All Rights Reserved. <a href="http://getbootstrap.com/">Built with Bootstrap</a></p>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>
oter>



</body>

</html>
