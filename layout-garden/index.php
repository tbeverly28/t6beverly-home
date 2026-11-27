<!doctype html>
<html lang="en">
	<head>
		<title>Layout Garden</title>
		<meta name="description" content="Tahir's layout garden">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="//peprojects.dev/t6beverly/assets/images/meta-share.png">
		
		<!-- styles -->
		<link rel="stylesheet" href="/t6beverly/styles/styles.css">
		<!-- specific to the layout garden -->
		<link rel="stylesheet" href="styles/modules.css">
		<link rel="stylesheet" href="styles/layout-garden.css">
		<!-- font apis -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<!-- DM Sans, Mono -->
		<link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
	</head>
	<body>
		<header class="site-header">
			<a href="#page-content" class="skip-link direction-voice">Skip to content</a>
			
			<nav class="site-nav">
				<ul>
					<li>
						<a class="logo block" href="/t6beverly">
							<picture class="img-container">	
								<img src="/t6beverly/assets/images/meta-share.png" alt="smile">
							</picture>
						</a>
					</li>

					<li>
						<ul class="menu">
							<li aria-label="menu item 1">
								<a class="direction-voice block" href="/t6beverly/about">About</a>
							</li>

							<li aria-label="menu item 2">
								<a class="direction-voice block" href="/t6beverly/layout-garden">Layout Garden</a>
							</li>

							<li aria-label="menu item 3">
								<a class="direction-voice block" href="/t6beverly/projects">Projects</a>
							</li>

							<li aria-label="link to footer menu" class="icon">
								<a href="#footer-nav">
									<svg class="icon" viewBox="0 0 24 24">
										<path d="M3,18V16H21v2H3Zm0-5V11H21v2H3ZM3,8V6H21V8H3Z"/>
									</svg>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		
		<section class="page-header">
			<inner-column class="medium">
				<div class="headers">
					<h2 class="special">Responsive</h2>
					<h1 class="title">Layout Garden</h1>
				</div>	
			</inner-column>
		</section>

		<main class="page-content layout-garden">
			<section class="page-section">
				<!-- all the layouts -->
				<!-- change section to article? -->
				<ul>
					<li aria-label="layout-1"><?php include('modules/layout-1.php')?></li>
					<li aria-label="layout-2"><?php include('modules/layout-2.php')?></li>
					<li aria-label="layout-3"><?php include('modules/layout-3.php')?></li>
					<li aria-label="layout-4"><?php include('modules/layout-4.php')?></li>
					<li aria-label="layout-5"><?php include('modules/layout-5.php')?></li>
					<li aria-label="layout-6"><?php include('modules/layout-6.php')?></li>
					<li aria-label="layout-7"><?php include('modules/layout-7.php')?></li>
					<li aria-label="layout-8"><?php include('modules/layout-8.php')?></li>
					<li aria-label="layout-9"><?php include('modules/layout-9.php')?></li>
					<li aria-label="layout-10"><?php include('modules/layout-10.php')?></li>
					<li aria-label="layout-11"><?php include('modules/layout-11.php')?></li>
				</ul>
			</section>
		</main>
		
		<!-- site footer -->
		<?php include('../site-footer.php')?>	