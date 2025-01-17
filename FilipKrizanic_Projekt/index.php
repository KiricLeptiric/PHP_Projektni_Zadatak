
<?php 
	define('__APP__', TRUE);
	
    session_start();
	
	include ("dbconn.php");
	
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>
	<head>
		
		
		<link rel="stylesheet" href="style.css">
	
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content=""The ultimate luxury sedan with cutting-edge technology."">
        <meta name="keywords" content="mercedes, benz, carl">
		
		<meta itemprop="name" content="Mercedes">
		<meta itemprop="description" content=""The ultimate luxury sedan with cutting-edge technology."">
		<meta itemprop="image" content="img/mercedes6.jpeg"> 
		
		<meta name="twitter:title" content="Mercedes">
		<meta name="twitter:description" content=""Mercedes-Benz: Simbol luksuza, performansi i inovacija. 🚗✨ Istražite modele koji redefinišu vožnju. #MercedesBenz #LuxuryCars #Innovation"">
		
        <meta name="author" content="fkriza3@vvg.hr">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<title>Mercedes Benz</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
		
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	else if ($menu == 2) { include("news.php"); }
	
	else if ($menu == 3) { include("contact.php"); }

	else if ($menu == 4) { include("about-us.php"); }
	
	else if ($menu == 5) { include("register.php"); }

	else if ($menu == 6) { include("signin.php"); }

	else if ($menu == 7) { include("admin.php"); }
	
	print '
	</main>
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Filip Križanić</p>
	</footer>
</body>
</html>';
