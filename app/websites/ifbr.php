<?php
	$title = 'dp: islandfishingboatrentals.ca';
	require_once(__DIR__ . '/../header.php');
	require_once(__DIR__ . '/../nav.php')
?>

	<div class="content wrapper wrapper--narrow">
		<div class="website">
			<p class="website__section-title"><a href="http://islandfishingboatrentals.ca/" target="blank">IslandFishingBoatRentals.ca</a></p>
			<p>
				Island Fishing Boat Rentals is a brand new boat rental company out of Port Alberni, BC. &nbsp The first version of their website is based on the essential information anyone interested in a West Coast fishing experience needs to know.
			</p>
			<div class="website__photo">
				<a href="http://islandfishingboatrentals.ca/" target="blank"><img srcset="/assets/images/ifbr-screenshot.jpg" alt="The IFBR homepage"></a>
			</div>
			

			<hr>
			
			<p class="website__section-title">The Design</p>
			<p class="centered"><span class="website__tech-name">Sketch - </span>Used for the website design, planning, and mockup</p>
			<p class="centered"><span class="website__tech-name">Adobe Illustrator - </span>Used for the logo design</p>
			<div class="website__photo">
				<img srcset="/assets/images/making-of-ifbr.jpg" alt="The Sketch file originally">
			</div>
		

			<hr>

			<p class="website__section-title">The Build</p>
			<p><span class="website__tech-name">Post CSS - </span>Used as the CSS preprocessor for my highly organized CSS. For mixins, modules, color palettes, variable, etc.</p>
			<p><span class="website__tech-name">WebPack/Babel - </span>To build the scripts and convert highly organized ES6 Javascript into browser friendly ES5.</p>
			<p><span class="website__tech-name">Gulp - </span>To automate essential development features, like browsersync, and other great npm packs</p>
			<p><span class="website__tech-name">NPM Modules - </span>Such as Waypoints, lazy-images, picturefill,  gulp-cssnano, gulp-rev, and many more</p>
			<hr>
		</div>
	</div>

<?php
	require_once(__DIR__ . '/../footer.php');
?>