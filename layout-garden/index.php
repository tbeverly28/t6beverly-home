<!doctype html>
<html lang="en">
	<head>
		<title>Layout Garden</title>
		<meta name="description" content="Tahir's layout garden">

		<!-- specific to the layout garden -->
		<link rel="stylesheet" href="styles/modules.css">

		<?php include('../site-head.php')?>
		
		<main class="page-content">
			<section class="page-section layout-garden">
				<inner-column class="medium">
					<div class="headers">
						<h2 class="special">Responsive</h2>
						<h1 class="title">Layout Garden</h1>
					</div>	
				</inner-column>

				<!-- all the layouts -->
				<!-- change section to article -->
				<ul class="layouts-list">
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