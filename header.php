    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Rainer Karcher" />
	<meta name="contact" content="hello@rainerkarcher.com" />
	<meta name="copyright" content="Copyright (c)2014 Rainer Karcher. All Rights Reserved." />
	<meta name="description" content="Rainer Karcher is a web developer and Linux systems administrator based in Kansas City, MO." />
	<meta name="keywords" content="rainer karcher, web development, web design, html, css, mysql, javascript, php, linux, developer, wizards" />
    
    <!-- Bootstrap Core JS/jQuery Libraries -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <!-- Custom JS/jQuery Libraries -->
    
    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <!-- Custom CSS/Fonts -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">

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
<style type="text/css">
    .bs-navtoggle{
    	margin: 20px;
    }
</style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #496e74; color:#ffffff;">
        <div class="container">
        	<!-- Grouping brand and toggle together for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navtoggle-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Rainer Karcher</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-navtoggle-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.php">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
	                <li><a href="blog" target="_blank">Blog</a></li>
				    <li><a href="#contact-modal" class="btn">Contact</a></li>
                </ul>
            </div> <!-- End .navbar-collapse -->
        </div> <!-- End .container -->
    </nav>    
    
    <div id="page_box">
    <!-- Modal HTML -->
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div> <!-- .modal-content -->
        </div> <!-- End .modal-dialog -->
    </div> <!-- End Contact Modal -->