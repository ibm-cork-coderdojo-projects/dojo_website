<?php
if (empty($_GET)) {
    $newURL = "http://ibmcorkcoderdojo.com/error";
	header('Location: '.$newURL);
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php
		$parameter = htmlspecialchars($_GET['v']);
        $xmldoc = new DOMDocument();
        $xmldoc->load('feed.xml');

        $xpathvar = new Domxpath($xmldoc);

        $queryResult = $xpathvar->query("//course[link='{$parameter}']/name");
        foreach($queryResult as $result){
                echo $result->textContent;
        }
		if ($parameter == null) {
	$newURL = "http://ibmcorkcoderdojo.com/error";
	header('Location: '.$newURL);
}
		?> - Course - Coderdojo IBM</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
		<link href="favicon.ico" rel="icon" type="image/x-icon">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" media="screen" />
        <link href="lightbox/css/lightbox.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        
        <script src="js/vendor/modernizr.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js\/vendor\/1.7.2.jquery.min.js"><\/script>')</script>
        
        <script src="lightbox/js/lightbox.js"></script>
        <script src="js/vendor/prefixfree.min.js"></script>
        <script src="js/vendor/jquery.slides.min.js"></script>
        <script src="js/script.js"></script>
        
        <!--[if lt IE 9]>
            <style>
                header
                {
                    margin: 0 auto 20px auto;
                }
                #four_columns .img-item figure span.thumb-screen
                {
                    display:none;
                }  
            </style>
        <![endif]-->
        
        
        <script>
        $(function() {
          $('#slides').slidesjs({	
            height: 235,
            navigation: false,
            pagination: false,
            effect: {
              fade: {
                speed: 400
              }
            },
            callback: {
                start: function(number)
                {			
                    $("#slider_content1,#slider_content2,#slider_content3").fadeOut(500);
                },
                complete: function(number)
                {			
                    $("#slider_content" + number).delay(500).fadeIn(1000);
                }		
            },
            play: {
                active: false,
                auto: true,
                interval: 6000,
                pauseOnHover: false,
                effect: "fade"
            }
          });
        });
        </script>
		
		<script>
		$(document).ready(function(){
	
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollToTop').fadeIn();
			} else {
				$('.scrollToTop').fadeOut();
			}
		});
	
		$('.scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
	
		});
		</script>
		<script>
		$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
		</script>
	</head>

	<body>
	<div id="wrapper">
		<a href="#" class="scrollToTop">Scroll To Top</a>
        <header>
            <div class="toggleMobile">
                <span class="menu1"></span>
                <span class="menu2"></span>
                <span class="menu3"></span>
            </div>
            <div id="mobileMenu">
                <ul>
                    <li><a href="http://ibmcorkcoderdojo.com/">Home</a></li>
                    <li><a href="courses">Courses</a></li>
					<li><a href="contact">Contact</a></li>
					<li><a id="moodle" href="http://ibmcorkcoderdojo.com/moodle" target="_blank"><b>Moodle</b></a></li>
                </ul>
            </div>           
            <h1><img src="img/logoLong.png" id="logo"/></h1>
            <p>Airport Business Park</p>           
            
            <nav>
            	<h2 class="hidden">Navigation</h2>
                <ul>
                    <li><a href="http://ibmcorkcoderdojo.com/">Home</a></li>
                    <li><a href="courses">Courses</a></li>
                    <li><a href="contact">Contact</a></li>
					<li><a id="moodle" href="http://ibmcorkcoderdojo.com/moodle" target="_blank"><b>Moodle</b></a></li>
                </ul>
            </nav>
        </header>
		<div id="content">
		<div id="coursesIntro"><h6 class="bounceIn animated"><?php
		$parameter = htmlspecialchars($_GET['v']);
        $xmldoc = new DOMDocument();
        $xmldoc->load('feed.xml');

        $xpathvar = new Domxpath($xmldoc);

        $queryResult = $xpathvar->query("//course[link='{$parameter}']/name");
        foreach($queryResult as $result){
                echo $result->textContent;
        }
		?></h6></div>
		
		<div id="about" class="generated">
		
			
			<p style="font-size:24px;"><b><?php
				$parameter = htmlspecialchars($_GET['v']);

				echo file_get_contents("coursesTxt/{$parameter}.txt");

			?></b></p>
			<br>
			<p>In order to sign up, you must fill out this <a href="http://ibmcorkcoderdojo.com/contact">form</a>. If you are a beginner, you may be put on a waiting list as we only start beginner classes at certain times of the year.</p>
			<br>
		</div>
		</div>
		<div id="footer">
			<center><a href="https://coderdojo.com" target="_blank"><img src="img/CD.svg"/></a></center>
		</div>
    </div>
	</body>
</html>
