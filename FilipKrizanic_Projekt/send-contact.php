<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="style.css">

		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		

		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		

		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
	
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="fkriza3@vvg.hr">
		
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

		

		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 

		<title>Example page - Mercedes Contact</title>
	</head>
<body>
	<header>
		<div class="hero-image" style="height: 150px;"></div>
		<nav>
			<ul>
			  <li><a href="index.html">Home</a></li>
			  <li><a href="news.html">Mercedes News</a></li>
			  <li><a href="contact.html">Mercedes Contact</a></li>
			  <li><a href="about-us.html">About Mercedes-Benz</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Mercedes Contact Form</h1>
		<div id="contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18752.563232486555!2d16.094757841079264!3d45.67922683309857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47667d91ae6536c7%3A0x1c8b0f124c3ed2a3!2sMercedes-Benz%20Auto%20Ga%C5%A1pari%C4%87!5e0!3m2!1shr!2shr!4v1737062416989!5m2!1shr!2shr" width="920" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<?php
				print '<p style="text-align:center; padding: 10px; background-color: #d7d6d6;border-radius: 5px;">We recieved your question. We will answer within 24 hours.</p>';
				$EmailHeaders  = "MIME-Version: 1.0\r\n";
				$EmailHeaders .= "Content-type: text/html; charset=utf-8\r\n";
				$EmailHeaders .= "From: <fkriza3@vvg.hr>\r\n";
				$EmailHeaders .= "X-Mailer: PHP/".phpversion();
				$EmailSubject = 'Example page - Mercedes Contact Form';
				$EmailBody  = '
				<html>
				<head>
				   <title>'.$EmailSubject.'</title>
				   <style>
					body {
					  background-color: #ffffff;
						font-family: Arial, Helvetica, sans-serif;
						font-size: 16px;
						padding: 0px;
						margin: 0px auto;
						width: 500px;
						color: #000000;
					}
					p {
						font-size: 14px;
					}
					a {
						color: #00bad6;
						text-decoration: underline;
						font-size: 14px;
					}
					
				   </style>
				   </head>
				<body>
					<p>First name: ' . $_POST['firstname'] . '</p>
					<p>Last name: ' . $_POST['lastname'] . '</p>
					<p>E-mail: <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a></p>
					<p>Country: ' . $_POST['country'] . '</p>
					<p>Subject: ' . $_POST['subject'] . '</p>
				</body>
				</html>';
				print '<p>First name: ' . $_POST['firstname'] . '</p>
				<p>Last name: ' . $_POST['lastname'] . '</p>
				<p>E-mail: ' . $_POST['email'] . '</p>
				<p>Country: ' . $_POST['country'] . '</p>
				<p>Subject: ' . $_POST['subject'] . '</p>';
				mail($_POST['email'], $EmailSubject, $EmailBody, $EmailHeaders);
			?>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2025 Filip Križanić</p>
	</footer>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-98455037-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
