<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>About Angela J. Holden | Frontend Developer</title>
        <meta name="description" content="Frontend developer">
        <link rel='dns-prefetch' href='//fonts.googleapis.com'>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="../style.css">
        <link rel="shortcut icon" href="../favicon.png">
        <script type="text/javascript" src="../js/main.js"></script>
        <?php include_once('../partials/base.php'); ?>
    </head>

	<body class="about">

		<a href="#skip-nav">Skip Navigation</a>
        <a href="#" aria-label="Open Menu" class="menu-open"><span class="menu-icon">≡</span></a>
        <nav class="nav-primary">
            <ul>
                <li><a href="./">Home</a></li>
                <li class="current has-children"><a href="about/">About</a>
                    <ul class="sub-menu">
                        <li><a href="#">Résumé</a></li>
                    </ul>
                </li>
                <li class="has-children"><a href="skills/">Skills</a>
                    <ul class="sub-menu">
                        <li><a href="skills/ui-ux/">UI/UX</a></li>
                        <li><a href="skills/frontend/">Frontend</a></li>
                        <li><a href="skills/accessibility/">Accessibility</a></li>
                    </ul>
                </li>
                <li><a href="portfolio/">Portfolio</a></li>
                <li><a href="contact/">Contact</a></li>
            </ul>
            <a href="#" aria-label="Close Menu" class="menu-close"><span class="menu-icon">×</span></a>
        </nav>

		<main id="skip-nav" class="wrap">

			<header class="header">
				<div class="top_home_links">
					<span class="home_links">Angela J. Holden</span>
					<span class="home_links"><a href="#">Résumé</a></span>
				</div>

				<?php include_once('../svg/initials.svg'); ?>

				<p>Making the world a better place, one user experience at a time.</p>

				<button><a class="button" href="#">Interested? Let's talk.</a></button>

				<?php include_once('../svg/circle.svg'); ?>
			</header>

			<section class="content">
				<article class="yellow_box">
					<h2 class="sub_head">Well, hello there!</h2>
					<p>My name is Angela and I’m a UI/UX designer and frontend developer. I love my dog, the piano and coding. In that order. Rounding out my list are cheap wine, coffee and books.</p>
					<button><a class="button" href="#">More About Me</a></button>
				</article>

				<figure class="img_box">
					<img src="images/angelajholden-piano-softlight.jpg" alt="">
				</figure>
			</section>

		</main>

		<?php include_once('../partials/footer.php'); ?>

	</body>
</html>
