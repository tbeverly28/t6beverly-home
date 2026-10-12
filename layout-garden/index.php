<?php include('header.php'); ?>

<header class="page-header">
	<inner-column>
		<h1 class="title">My Layout Garden</h1>
	</inner-column>
</header>

<main class="page-content">
	<!-- template
	<section class="page-section dark-theme">
	<section class="page-section">
		<inner-column> <?php include('modules/.php')?> </inner-column>
	</section>
	 -->

	 <!-- Pixartprinting Footer | Layout 1 - 10/7/26 -->
	 <section class="page-section">
	 	<inner-column><?php include('modules/pixartprinting-footer.php')?></inner-column>
	 </section>

	 <!-- Coolors Palette Generator | Layout 2 - 10/8/26 (additional features possible) -->
	 <section class="page-section">
	 	<inner-column><?php include('modules/coolors-palette-gen.php')?></inner-column>
	 </section>

	 <!-- Lorain Colors Substance Article | Layout 3 - 10/9/26 -->
	 <section class="page-section">
	 	<inner-column><?php include('modules/loraincolors-hero.php')?></inner-column>
	 </section>

	 <!-- ZDNET Nav bar | Layout 4 - 10/11/26 (additional features possible) -->
	 <section class="page-section">
	 	<inner-column><?php include('modules/zdnet-nav.php')?></inner-column>
	 </section>

	 <!-- MyAnimeList new footer | Layout 5 - 10/12/26 (additional features possible) -->
	 <section class="page-section">
	 	<inner-column><?php include('modules/myanimelist-footer.php')?></inner-column>
	 </section>
</main>

 <?php include('footer.php'); ?>