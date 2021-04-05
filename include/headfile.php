		<meta charset="UTF-8">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
		
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta name="description" content="Yvan Zimmermann digital resume. Everything you need to know about me!">
		 
		<meta name="keywords" content="Yvan Zimmermann resume">
		
		<meta name="author" content="Yvan Zimmermann">
		
		<link rel="icon" href="pic/meta/YZ.png">
		
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- Google analytics script -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-96905665-1', 'auto');
		  ga('send', 'pageview');
		</script>
		
		<!-- main style sheet -->
		<link rel="stylesheet" type="text/css" href="main.css">
		
		
		<!-- menu script -->
		<script> 
			
			$(document).ready(function(){
								
				var active = window.location.href;
				
				// set the active class for the menu
				if ( active.search('index.php') > 0 ){
					
					$('.resume').addClass('active_page');
					
				}
				else if ( active.search('project.php') > 0 ){
					
					$('.project').addClass('active_page');
					
				}
				else if ( active.search('contact.php') > 0 ){
					
					$('.contact').addClass('active_page');
					
				}
				else {
					
					$('.resume').addClass('active_page');
					
				}
				
			});
		
		</script>