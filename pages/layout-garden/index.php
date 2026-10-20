<!doctype html>
<html lang="en">
	<head>
		<title>My Layout Garden</title>
		<meta name="description" content="Tahir's 6billion layout creations">

		<!-- specific to layout garden -->
		<link rel="stylesheet" href="/t6beverly-home/styles/garden-modules.css">

		<!-- site header -->
		<?php include('../../site-head.php')?>	

		<main class="page-content alt">
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

			<!-- Roadmap.sh community tab | Layout 6 - 10/12/26 -->
			<section class="page-section">
			 	<inner-column><?php include('modules/roadmapsh-community.php')?></inner-column>
			</section>

			<!-- Leetcode module progress | Layout 7 - 10/13/26 (additional features possible), will likely be a group of mini modules in a flex-row -->
			<section class="page-section">
			 	<inner-column><?php include('modules/leetcode-progress.php')?></inner-column>
			</section>

			<!-- Sabukaru header | Layout 8 - 10/13/26 (additional features possible) -->
			<section class="page-section">
			 	<inner-column><?php include('modules/sabukaru-header.php')?></inner-column>
			</section>

			<!-- Fontshare nav | Layout 9 - 10/13/26 (additional features possible) -->
			<section class="page-section">
			 	<inner-column><?php include('modules/fontshare-nav.php')?></inner-column>
			</section>

			<!-- Meletrix keyboards | Layout 10 - 10/13/26 -->
			<section class="page-section">
			 	<inner-column><?php include('modules/meletrix-keyboards.php')?></inner-column>
			</section>

			<!-- Settings panels: cobalt.tools, Minecraft, Metal Gear Solid 2, Trader Joe's | Layouts 11-14 10/14/26 (additional features possible) -->
			<section class="page-section">
			 	<inner-column><?php include('modules/settings-panels.php')?></inner-column>
			</section>

			<!-- The Nun (2018) poster  | Layout 15 - 10/15/26 (needs work, additional features possible) -->
			<section class="page-section">
			 	<inner-column><?php include('modules/the-nun.php')?></inner-column>
			</section>

			<!-- Comico Blimp w/ Hype page | Layout 16, 17 - 10/15/26 (needs work, additional features possible) -->
			<section class="page-section">
			 	<inner-column><?php include('modules/comico-blimp.php')?></inner-column>
			</section>
		</main>

	 	<?php include('../../site-footer.php'); ?>