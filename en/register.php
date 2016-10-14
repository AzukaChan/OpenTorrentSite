<?php
if (!isset($_SESSION))
  {
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<!-- Standard Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="OpenTorrentSite: an easy to setup torrent website!">
	<meta name="author" content="Kevin Durant">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Site Properties -->
	<title>Register | OpenTorrentSite</title>
	<!-- Google analytics -->
	<!-- Site Includes (css|js) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/pure-min.css">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel='shortcut icon' type='image/x-icon' href='../images/favico.ico' />
	<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
	<!--<![endif]-->
</head>

<body class="container">
	<div class="pure-g">

		<!-- (navigation) -->
		<div id="navigation" class="pure-u-1">
			<div class="pure-menu pure-menu-horizontal">
				<ul class="pure-menu-list" id="menu">
					<!-- title -->
					<li id="title" class="pure-menu-item pure-menu"><a href="browse.php" class="pure-menu-link hidesmall">openTorrentSite</a></li>
					<!-- nav -->
					<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
						<a href="#" id="menuLink1" class="pure-menu-link">Section</a>
						<ul class="pure-menu-children">
							<li class="pure-menu-item"><a href="#" class="pure-menu-link">Movies</a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link">Television</a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link">Music</a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link">Games</a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link">Software</a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link">Anime</a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link">Books</a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link">XXX</a></li>
						</ul>
					</li>
					<!-- search -->
					<li class="pure-menu-item pure-menu">
						<form class="pure-form">
							<input class="pure-input-1" type="text" style="box-shadow: none; border: none; height: 100%;" placeholder="search...">
						</form>
					</li>
				</ul>
			</div>
		</div>

		<!-- (login) -->
		<div class="pure-u-1 pure-u-md-3-4 left">
			<p class="category">Join us.</p>
			<div id="login">
				<form class="pure-form pure-form-stacked" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
				    <fieldset>
				        <legend>Please choose a strong password!</legend>

						<label for="name2">Username</label>
						<input id="name2" name="username" type="text" placeholder="Username" maxlength="12" required>
						
						<label for="email2">Email</label>
						<input id="email2" name="email2" type="text" placeholder="Email" maxlength="30" required>

						<label for="password2">Password</label>
						<input id="password2" name="password2" type="password" placeholder="Password" required>

						<label for="cpassword">Confirm password</label>
						<input id="cpassword" name="cpassword" type="password" placeholder="Password" required>
						
						<label class="pure-checkbox">
							<input type="checkbox" name="tos" required> I read and accept the <a href="tos.html">TOS</a>
						</label>

				        <button type="submit" class="pure-button pure-button-primary">Register</button>
				    </fieldset>
				</form>
			</div>
		</div>

		<!-- (footer) -->
		<div id="footer" class="pure-u-1">
			<div>&copy; OpenTorrentSite.com
				<div class="fright">
					<span>TERMS &amp; CONDITIONS</span>
					<span>PRIVACY POLICY</span>
					<span>DMCA</span>
				</div>
			</div>
		</div>
		<!-- Login php needs to be at the bottom -->
		<?php
			include_once "../php/login_handler.php";
			if(isset($_SESSION["username"])) {
				header("Location: browse.php");
			}
			//isset($_POST['tos']) && 
			if (isset($_POST['password2']) && isset($_POST['email2']) && isset($_POST['cpassword'])) {
				register();
				unset($_POST);
			}
		?>
	</div>
</body>