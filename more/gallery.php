<?php
	session_start();
	require_once("php/Session.php");
	if (isset($_SESSION['username']) && strlen($_SESSION['username']) < 2) {
		echo '<script type="text/javascript">'
			, 'window.location.replace("http://www.morethegame.com/change-username");'
			, '</script/>';
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title>M.O.R.E. - Gallery</title>
		<meta charset="UTF-8" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="M.O.R.E. - 4x space strategy game - Military, Organization, Research, Economy" />
		<meta name="keyword" content="more, game, space, strategy, military, organization, research, economy" />
		<meta name="author" content="Thomas Frost" />
		<link rel="icon" type="image/png" href="http://www.morethegame.com/img/menu/favicon.png" />
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Orbitron:900|Armata' type='text/css' />
		<link rel="stylesheet" href="http://www.morethegame.com/css/main.css" type="text/css" />
	</head>
	<body>
		<div id='login-error'></div>
		<header>
			<div id="cookies">
				<img class="float-right" onclick="AllowCookies()" src="http://www.morethegame.com/img/menu/exit.png" alt="exit" />
				<p>We use cookies to enhance your experience.<br />By continuing to visit this site you agree to our use of cookies.</p>
			</div>
			<div id="logo">
				<a href="start"><img class="ToggleImageOnOff" src="http://www.morethegame.com/img/menu/logo-off.png" alt="M.O.R.E. Logo" /></a>
			</div>
			<nav>
				<ul>
					<li><a class="ToggleSubMenuOnOff" href="game"><img id="game" class="ToggleImageOnOff" src="http://www.morethegame.com/img/menu/game-off.png" alt="Game" /></a></li>
					<li><a class="ToggleSubMenuOnOff" href="media"><img id="media" class="ToggleImageOnOff" src="http://www.morethegame.com/img/menu/media-off.png" alt="Media" /></a></li>
					<li><a href="preorder"><img id="preorder" class="ToggleImageOnOff" src="http://www.morethegame.com/img/menu/preorder-off.png" alt="Preorder" /></a></li>
					<li><a href="http://www.morethegame.com/forum/"><img id="forum" class="ToggleImageOnOff" src="http://www.morethegame.com/img/menu/forum-off.png" alt="Forum" /></a></li>
					<li><a id="contact-header" href="contact"><img id="contact-header-image" class="ToggleImageOnOff" src="http://www.morethegame.com/img/menu/contact-off.png" alt="Contact" /></a></li>
				</ul>
			</nav>
			<div id="social-header">
				<a href="https://www.facebook.com/MoreTheGame" target="_blank"><img class="ToggleImageOnOff" src="http://www.morethegame.com/img/social/facebook-off.png" alt="Our Facebook Page" /></a>
				<a href="https://www.twitter.com/MORE_the_game" target="_blank"><img class="ToggleImageOnOff" src="http://www.morethegame.com/img/social/twitter-off.png" alt="Our Twitter Feed" /></a>
				<a href="https://www.youtube.com/user/IdeaLCenter" target="_blank"><img class="ToggleImageOnOff" src="http://www.morethegame.com/img/social/youtube-off.png" alt="Our YouTube Channel" /></a>
			</div>
			<div id="login-username">
				<?php
					CheckIfUserIsLoggedAndDisplayLoginButtonOrProfileButton();
				?>
			</div>
			<div id="submenu">
				<div id="game-submenu" class="submenu">
					<div class="submenu-header">GAME</div>
					<div class="submenu-main">
						<ul>
							<li><a href="about">About M.O.R.E.</a></li>
							<li><a href="aliens">Aliens</a></li>
							<li><a href="diplomacy">Diplomacy</a></li>
							<li><a href="galaxy">Galaxy</a></li>
							<li><a href="government">Government</a></li>
							<li><a href="races">Races</a></li>
							<li><a href="science">Science</a></li>
							<li><a href="war">War</a></li>
						</ul>
					</div>
					<div class="submenu-footer"></div>
				</div>
				<div id="media-submenu" class="submenu">
					<div class="submenu-header">MEDIA</div>
					<div class="submenu-main">
						<ul>
							<li><a href="gallery">Gallery</a></li>
							<li><a href="video">Video</a></li>
						</ul>
					</div>
					<div class="submenu-footer"></div>
				</div>
				<div id="login-submenu" class="submenu">
					<div class="submenu-header">LOGIN</div>
					<div class="submenu-main">
						<form id="login-form" action="php/login_user.php" method="POST">
							<label for="username-email">Username / E-mail</label><br />
							<input id="username-email" name="username-email" type="text" placeholder="example@more.com" /><br />
							<label for="password">Password</label><br />
							<input name="password" type="password" /><br /><br />
							<input id="login-submit" class="submit-button" type="submit" value="SIGN IN" /><br /><br />
						</form>
						<?php
							CheckIfInfoIsSetAndDisplayInfoOrSpace("login-info");
						?>
						<a class="favlink" href="recover-password">Forgot password?</a><br />
						<a class="favlink" href="register">Create an account?</a><br />
					</div>
					<div class="submenu-footer"></div>
				</div>
			</div>
		</header>
		<main>
			<img id="slider-background" src="http://www.morethegame.com/img/menu/background.png" alt="background" />
			<div id="slider-container">
				<img class="slider" src="http://www.morethegame.com/img/screens/more1.jpg" alt="screenshot 1" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more2.jpg" alt="screenshot 2" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more3.jpg" alt="screenshot 3" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more4.jpg" alt="screenshot 4" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more5.jpg" alt="screenshot 5" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more6.jpg" alt="screenshot 6" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more7.jpg" alt="screenshot 7" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more8.jpg" alt="screenshot 8" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more9.jpg" alt="screenshot 9" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more10.jpg" alt="screenshot 10" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more11.jpg" alt="screenshot 11" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more12.jpg" alt="screenshot 12" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more13.jpg" alt="screenshot 13" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more14.jpg" alt="screenshot 14" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more15.jpg" alt="screenshot 15" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more16.jpg" alt="screenshot 16" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more17.jpg" alt="screenshot 17" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more18.jpg" alt="screenshot 18" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more19.jpg" alt="screenshot 19" />
				<img class="slider" src="http://www.morethegame.com/img/screens/more20.jpg" alt="screenshot 20" />
			</div>
			<img id="left-arrow" src="http://www.morethegame.com/img/screens/arrows/arrow-left.png" alt="arrow left" />
			<img id="right-arrow" src="http://www.morethegame.com/img/screens/arrows/arrow-right.png" alt="arrow right" />
			<div id="miniature-container"></div>
		</main>
		<footer>
			<div id="social-footer">
				<a href="https://www.facebook.com/MoreTheGame" target="_blank"><img class="ToggleImageOnOff" src="http://www.morethegame.com/img/social/facebook-off.png" alt="Our Facebook Page" /></a>
				<a href="https://www.twitter.com/MORE_the_game" target="_blank"><img class="ToggleImageOnOff" src="http://www.morethegame.com/img/social/twitter-off.png" alt="Our Twitter Feed" /></a>
				<a href="https://www.youtube.com/user/IdeaLCenter" target="_blank"><img class="ToggleImageOnOff" src="http://www.morethegame.com/img/social/youtube-off.png" alt="Our YouTube Channel" /></a><br />
				<a id="contact-footer" href="contact"><img id="contact-footer-image" class="ToggleImageOnOff" src="http://www.morethegame.com/img/menu/contact-off.png" alt="contact" /></a>
			</div>
			<img id="pause-button" class="ToggleImageOnOff" src="img/menu/pause-off.png" alt="Pause Button" onclick="ToggleAutoSlider()">
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="http://www.morethegame.com/scr/main.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-67222169-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>