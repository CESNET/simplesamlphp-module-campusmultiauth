<?php
	$title = 'Obrázky';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>14</strong>
						Obrázky
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_images.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazení galerie obrázků. Slouží pro ni div.ins-box-gallery.
						</p>
						<p>
							Molekula slouží především ke vkládání do dalších molekul, typicky do molekuly <a href="/_ins/tpl/m-01-04-widget.html">Widget</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="ins-box-images">
							<div class="ins-box-images__item">
								<img src="https://dummyimage.com/260x198/f2f2fd/000000" width="130" height="98" alt="">
							</div>
							<div class="ins-box-images__item">
								<img src="https://dummyimage.com/260x198/f2f2fd/000000" width="130" height="98" alt="">
							</div>
							<div class="ins-box-images__item">
								<img src="https://dummyimage.com/260x198/f2f2fd/000000" width="130" height="98" alt="">
							</div>
							<div class="ins-box-images__item">
								<img src="https://dummyimage.com/260x198/f2f2fd/000000" width="130" height="98" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
