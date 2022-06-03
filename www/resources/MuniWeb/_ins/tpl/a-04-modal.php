<?php
	$title = 'Modální okno';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>4</strong>
						Modální okno
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/atoms/_modal.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro modální okno. Slouží pro něj div.ins-modal.
						</p>
						<p>
							Do div.ins-modal__body patří další obsah. Vkládáme zde typicky další molekuly, nejčastěji to může být univerzální <a href="/_ins/tpl/m-01-04-widget.html">Widget</a>.
						</p>
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						Ukázku modálního okna s obsahem naleznete <a href="/_ins/tpl/s-06-modalni-okno-moje-rychle-odkazy.html">ZDE</a>.
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
