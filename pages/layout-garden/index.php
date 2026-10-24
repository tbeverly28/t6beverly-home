<!doctype html>
<html lang="en">
	<head>
		<title>My Layout Garden</title>
		<meta name="description" content="Tahir's 6billion layout creations">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="//peprojects.dev/t6beverly/assets/images/meta-share/main2.png">
		
		<!-- specific to the layout garden -->
		<!-- <link rel="stylesheet" href="/t6beverly-home/styles/styles.css"> -->
		<link rel="stylesheet" href="styles/styles.css">
		<link rel="stylesheet" href="styles/garden-modules.css">
		<!-- font apis -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<!-- no more londrina solid -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&family=Rubik+Distressed&family=Rubik+Glitch&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
		<link href="https://api.fontshare.com/v2/css?f[]=excon@1&display=swap" rel="stylesheet">
	</head>
	<body>
		<header class="site-header">
			<a href="#" class="visually-hidden">Skip to content</a>
			
			<!-- nav	 -->
			<nav class="menu">
				<ul>
					<li class="nav-item">
						<a class="logo" href="/t6beverly-home">
							<picture>
								<img src="https://blob.gifcities.org/gifcities/BCVB2QYIVL5IETQEATAADXNLDUBVHSNL.gif" alt="skeleton marching">						
							</picture>
						</a>
					</li>
					<!-- this should be a drop down to see the other favorites versions -->
					<li class="nav-item"><a class="direction-voice" href="/t6beverly-home/pages/about">about</a></li>
					<li class="nav-item"><a class="direction-voice" href="/t6beverly-home/pages/projects">projects</a></li>
					<li class="nav-item"><a class="direction-voice" href="/t6beverly-home/pages/layout-garden">layout garden</a></li>
					<li class="nav-item"><a class="direction-voice" href="/t6beverly-home/pages/contact">contact</a></li>
				</ul>
			</nav>
		</header>

		<section class="landing">
			<h1 class="title">The Layout Garden</h1>
			<p class="calm-voice">Contains Tahir's 6billion layout creations</p>
		</section>	

		<main class="page-content alt">
			<!-- Pixartprinting Footer | Layout 1 - 10/7/26 -->
			<?php include('modules/pixartprinting-footer.php')?>

			<!-- Coolors Palette Generator | Layout 2 - 10/8/26 (additional features possible) -->
			 <?php include('modules/coolors-palette-gen.php')?>

			<!-- Lorain Colors Substance Article | Layout 3 - 10/9/26 -->
			 <?php include('modules/loraincolors-hero.php')?>

			<!-- ZDNET Nav bar | Layout 4 - 10/11/26 (additional features possible) -->
			 <?php include('modules/zdnet-nav.php')?>

			<!-- MyAnimeList new footer | Layout 5 - 10/12/26 (additional features possible) -->
			 <?php include('modules/myanimelist-footer.php')?>

			<!-- Roadmap.sh community tab | Layout 6 - 10/12/26 -->
			 <?php include('modules/roadmapsh-community.php')?>

			<!-- Leetcode module progress | Layout 7 - 10/13/26 (additional features possible), will likely be a group of mini modules in a flex-row -->
			 <?php include('modules/leetcode-progress.php')?>

			<!-- Sabukaru header | Layout 8 - 10/13/26 (additional features possible) -->
			 <?php include('modules/sabukaru-header.php')?>

			<!-- Fontshare nav | Layout 9 - 10/13/26 (additional features possible) -->
			 <?php include('modules/fontshare-nav.php')?>

			<!-- Meletrix keyboards | Layout 10 - 10/13/26 -->
			 <?php include('modules/meletrix-keyboards.php')?>

			<!-- Settings panels: cobalt.tools, Minecraft, Metal Gear Solid 2, Trader Joe's | Layouts 11-14 10/14/26 (additional features possible) -->
			 <?php include('modules/settings-panels.php')?>

			<!-- The Nun (2018) poster  | Layout 15 - 10/15/26 (needs work, additional features possible) -->
			 <?php include('modules/the-nun.php')?>

			<!-- Comico Blimp w/ Hype page | Layout 16, 17 - 10/15/26 (needs work, additional features possible) -->
			 <?php include('modules/comico-blimp.php')?>

			<!-- Veggies Flier | Layout 18 - 10/23/26 -->
			 <?php include('modules/veggies-flier.php')?>

			 <!-- Devil May Cry Gameinformer article (2013) | Layout 19 - 10/24/26 (needs work) -->
			 <?php include('modules/dmc-gameinformer.php')?>
		</main>

	 	<?php include('../../site-footer.php'); ?>