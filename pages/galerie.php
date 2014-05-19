<div class="content">
	<div class="gallery">
		<?php

		require_once(__DIR__ . '/../lib/wideimage/WideImage.php');

		$imageDir = __DIR__ . '/../img/galerie/';
		$cacheDir = __DIR__ . '/../cache/';

		$images = array();
		$files = scandir($imageDir);
        usort($files);
		foreach ($files as $file) {
			if (! preg_match('/^\./', $file)) {
				$sourcePath = $imageDir . $file;
				$hash = sha1($file);
				$thumbName = "{$hash}_thumb.jpg";
				$imageName = "{$hash}.jpg";
		
				if (! file_exists($cacheDir . $thumbName)) {
					$image = WideImage::load($sourcePath);
			
					$image->resize(600, 600, 'outside')
						->saveToFile($cacheDir . $imageName);
			
					$image->resize(420, 420, 'outside')
						->autoCrop()
						->crop('center', 'center', 420, 420)
						->saveToFile($cacheDir . $thumbName);
				}

                echo "<a href=\"/cache/$imageName\" data-lightbox=\"galerie\">";
				echo "<img src=\"/cache/$thumbName\" alt=\"Galerie\">";
                echo "</a>";
			}
		}
		?>
        <div class="clear"></div>
	</div>
</div>
