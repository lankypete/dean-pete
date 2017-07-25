<?php
$title = 'dp: Visual Art';
require_once(__DIR__ . '/../header.php');
require_once(__DIR__ . '/../nav.php');
?>

	<div class="content wrapper wrapper--narrow">
		<div class="uiue">
			<p class="uiue__section-title">Visual Art</p>

			<hr>

			
			<div class="uiue__photo--visual-art">
				<img sizes="(min-width: 600px) 800px, 100vw" srcset="/assets/images/zebraart-800-opt.jpg 800w, /assets/images/zebraart-400-opt.jpg 400w" alt="Zebra Visual Art">
			</div>

			<hr>

			<div class="uiue__photo--visual-art">
				<img sizes="(min-width: 600px) 800px, 100vw" srcset="/assets/images/eagleart-800-opt.jpg 800w, /assets/images/eagleart-400-opt.jpg 400w" alt="Eagle Visual Art">
			</div>
			
			<hr>

		</div>
	</div>

<?php
	require_once(__DIR__ . '/../footer.php');
?>