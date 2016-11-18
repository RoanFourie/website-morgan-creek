<?php
 Header("Cache-Control: must-revalidate");

 $offset = 60 * 60 * 24 * 3; //Sets the cache to refresh 3 days in the future.
 $ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
 Header($ExpStr);
 
 $errHuman = ' ';
 $errName = ' ';
 $errEmail = ' ';
 $errMessage = ' ';
 $result=' ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= isset($PageTitle) ? $PageTitle : "Morgan Creek"?></title>
	<meta name="keywords" content="<?= isset($PageKeywords) ? $PageKeywords : "Steam Boilers, Plant Design, Sewer Systems, Epoxy Floors, Machinery Installation, Steam reticulation services, fabrication of boilers, Ash Pots" ?>"/>
	<meta name="description" content="<?= isset($PageDescription) ? $PageDescription : "Design, Installation and Maintenance on Steam Boilers, Fabrication of Steam Boilers and Plant Steel Structure design and manufacturing" ?>"/>
	<meta name="author" content="Roan Fourie"/>
	<meta name="robots" content="index, follow"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" href="../images/icon.ico" />
	<link rel="canonical" href="<?= isset($PageURL) ? $PageURL : "http://wwww.morgancreek.co.za/" ?>" />
	<!-- FOR HANDHELD DEVICES -->
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/apple-touch-icon-152x152.png">
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="../js/jquery-1.11.0.min.js"></script>
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<nav id="navbar-darkblue" class="navbar navbar-default navbar-static-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle"data-toggle="collapse" data-target="#mynavbar-content">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="../"><img src="../images/Morgan-Creek-logo.png" alt="Morgan Creek"></a>
					</div>
					<div class="collapse navbar-collapse" id="mynavbar-content">
						<ul class="nav navbar-nav navbar-right">
							<?php
							// Remember the directory names if there are sub-directories.
							$items = array(
							   // array('link'=>'#home', 'label'=>'Home'), 
								array('link'=>'../#about', 'label'=>'About'),
							    array('link'=>'../#services', 'label'=>'Services'), 
								array('link'=>'../#contact', 'label'=>'Contact'),
							);
							$menu = '';
							foreach ($items as $val) {	
							    $class = ($_SERVER['PHP_SELF'] == $val['link']) ? ' class="active"' : '';
							    $menu .= sprintf('<li'.$class.'><a href="%s">%s</a></li>', $val['link'], $val['label']);
							}
							$menu .= '</ul>';
							echo $menu;
							?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</div>
