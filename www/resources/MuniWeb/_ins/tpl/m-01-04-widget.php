<?php
	$title = 'Widget';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>06</strong>
						Widget
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_widget.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazování widgetů. Slouží pro ni div.ins-box-widget.
						</p>
						<p>
							Molekula slouží především jako obal pro vkládání dalších molekul, například kalendáře, jídelního lístků, dokumentů atd. Tyto další molekuly vkládáme vždy do div.ins-box-widget__body.
						</p>
						<p>
							Widget je možno na stránce variabilně vkládat do gridu, dle potřebné šířky.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--8-12">
								<div class="ins-box-widget">
									<div class="ins-box-widget__header">
										<h2 class="ins-box-widget__title">
											<span class="icon icon-globe"></span>
											Zprávy / Muni informuje
										</h2>
									</div>

									<div class="ins-box-widget__body">
										ZDE VKLÁDÁME DALŠÍ MOLEKULY
									</div>

									<div class="ins-box-widget__footer">
										<a href="#">Zobrazit MUNI archiv zpráv</a>
									</div>
								</div>
							</div>

							<div class="grid__cell size--l--4-12">
								<div class="ins-box-widget">
									<div class="ins-box-widget__header">
										<h2 class="ins-box-widget__title">
											<span class="icon icon-link"></span>
											Moje rychlé odkazy
										</h2>
									</div>

									<div class="ins-box-widget__body">
										ZDE VKLÁDÁME DALŠÍ MOLEKULY
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Compact</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Jedná se modifikaci defaulní molekuly, přidáváme k div.ins-box-widget__body třídu ins-box-widget__body--compact. Zajistí nám to, že vevnitř bude pouze 20px padding.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--8-12">
								<div class="ins-box-widget">
									<div class="ins-box-widget__header">
										<h2 class="ins-box-widget__title">
											<span class="icon icon-globe"></span>
											Zprávy / Muni informuje
										</h2>
									</div>

									<div class="ins-box-widget__body ins-box-widget__body--compact">
										ZDE VKLÁDÁME DALŠÍ MOLEKULY - bez paddingu
									</div>

									<div class="ins-box-widget__footer">
										<a href="#">Zobrazit MUNI archiv zpráv</a>
									</div>
								</div>
							</div>

							<div class="grid__cell size--l--4-12">
								<div class="ins-box-widget">
									<div class="ins-box-widget__header">
										<h2 class="ins-box-widget__title">
											<span class="icon icon-link"></span>
											Moje rychlé odkazy
										</h2>
									</div>

									<div class="ins-box-widget__body ins-box-widget__body--compact">
										ZDE VKLÁDÁME DALŠÍ MOLEKULY - bez paddingu
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Bez paddingu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Jedná se modifikaci defaulní molekuly, přidáváme k div.ins-box-widget__body třídu ins-box-widget__body--no-padding. Zajistí nám to, že vevnitř nebude žádný padding.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--8-12">
								<div class="ins-box-widget">
									<div class="ins-box-widget__header">
										<h2 class="ins-box-widget__title">
											<span class="icon icon-globe"></span>
											Zprávy / Muni informuje
										</h2>
									</div>

									<div class="ins-box-widget__body ins-box-widget__body--no-padding">
										ZDE VKLÁDÁME DALŠÍ MOLEKULY - bez paddingu
									</div>

									<div class="ins-box-widget__footer">
										<a href="#">Zobrazit MUNI archiv zpráv</a>
									</div>
								</div>
							</div>

							<div class="grid__cell size--l--4-12">
								<div class="ins-box-widget">
									<div class="ins-box-widget__header">
										<h2 class="ins-box-widget__title">
											<span class="icon icon-link"></span>
											Moje rychlé odkazy
										</h2>
									</div>

									<div class="ins-box-widget__body ins-box-widget__body--no-padding">
										ZDE VKLÁDÁME DALŠÍ MOLEKULY - bez paddingu
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
