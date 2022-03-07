<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">-->
	<meta name="keywords" content="SGR MONO">

	<!--<link rel="preconnect" href="https://fonts.gstatic.com">-->
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<title>Blank Page | SGR MONO</title>
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
	

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
		        <a class="navbar-brand" href="index.html">
                     <span class="align-middle">SGR MONO</span>
                </a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
<?php
if(isset($_SESSION["role"])){
	?>                       
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                 <i class="align-middle" data-feather="settings"></i>
                            </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo($_SESSION["login"]);?></span>
                            </a>

							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="view/deco.php">Log out</a>
							</div>							
						</li>
<?php
}else{
?>
vous n'êtes pas connecté
<?php	
}
?>

					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">