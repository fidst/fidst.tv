<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">

<head>

	<!-- Google Analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113523957-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-113523957-1');
	</script>
	<!-- end google Analytics -->

	<title>Isaac - Online Personality</title>
	<meta charset="utf-8" />

<?php
// This calls for all the repeated things in the header and scripts
include 'header.html';
?>

</head>

<body class="landing">

	<!-- Page Wrapper -->
	<div id="top" id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="#top">Isaac</a></h1>

			<?php
            // This calls for all the repeated things in the header and scripts
            include 'nav.html';
            ?>

		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>ISAAC</h2>
				<p>An Online Portfolio</p>

			</div>
			<a href="#who" class="more scrolly">Gander</a>
		</section>

		<!-- who -->
		<section id="who" class="wrapper style1 special">
			<div class="inner">
				<header class="major">
					<h2>Who is Isaac?</h2>
					<p>A bright-eyed, doesn't look back, excited, sorta human.
						<br> Isaac is a graduate of Fanshawe College, London, Canada in computer technology. With experience in community management, technical support, and corporate technology solutions.
						<br> </p>
				</header>
				<ul class="icons major">
					<li data-tooltip="Computer Mindset" data-tooltip-position="left"><span class="icon fa-desktop major style2"><span class="label">Computer Mindset</span></span>
					</li>
					<li data-tooltip="Leadership" data-tooltip-position="left"><span class="icon fa-power-off major style2"><span class="label">Leadership</span></span>
					</li>
					<li data-tooltip="Community" data-tooltip-position="left"><span class="icon fa-heart-o major style2"><span class="label">Community</span></span>
					</li>
					<li data-tooltip="Problem Solving" data-tooltip-position="left"><span class="icon fa-code major style2"><span class="label">Problem Solving</span></span>
					</li>
				</ul>
				<p>"Life is full of speed-bumps and stepping stones. Cheers to those who help along the way."</p>
			</div>
		</section>

<!-- Gallery -->
<?php
include 'gal.html';
?>

		<!-- contact -->
		<section id="contact" class="wrapper alt style5">
			<section class="spotlight">
				<!-- <div class="image">
					<div class="future gallery">
						<a href="../images/pic06.jpg" style="cursor:zoom-in" data-caption="">
						<img src="../images/pic06.jpg" alt="">
					</a>
					</div>
				</div> -->

				<div class="content footeralign">
					<h2>Get in touch.</h2>
					<p>If you have questions, or an opportunity, feel free to get in touch.</p>
					<ul class="actions">
						<li><a href="mailto:isaac@fidst.tv" class="button special">Email</a></li>
					</ul>
				</div>
			</section>

			<!-- Footer -->
			<?php
            // This calls for the footer
            include '../assets/footer.html';
            ?>

	</div>

</body>
</html>
