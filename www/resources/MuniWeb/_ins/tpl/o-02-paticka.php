<?php
	$title = 'Patička';
	$hideHeader = true;
	$hideFooter = true;
	include 'part/header.php';
?>

	<br /><br />

	<div class="sk-annot--main">
		<h1>
			<strong>02.01</strong>
			Patička
		</h1>
		<p>
			<strong>Zdrojové CSS:</strong> /src/_ins/css/organisms/_footer.scss
		</p>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Defaultní patička</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Výchozí organismus s patičkou. Slouží pro něj div.ins-footer.
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<?php include 'part/footers/type1.php'; ?>
		</div>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Defaultní patička - tmavá verze</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Tento organismus vychází ze defaultního organismu. Navíc je na .footer přidán modifikátor footer--dark, který obarví patičku do černé barvy.
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<?php
				$footerDark = true;
				include 'part/footers/type1.php';
			?>
		</div>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Defaultní patička - modrá verze</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Tento organismus vychází ze defaultního organismu. Navíc je na .footer přidán modifikátor footer--blue, který obarví patičku do modré barvy.
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<?php
				$footerBlue = true;
				include 'part/footers/type1.php';
			?>
		</div>
	</div>

<?php
	include 'part/footer.php';
?>
