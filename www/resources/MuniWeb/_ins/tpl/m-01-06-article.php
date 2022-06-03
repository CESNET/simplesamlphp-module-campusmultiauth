<?php
	$title = 'Články';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>06</strong>
						Články
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_article.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazování článků. Slouží pro ni div.ins-box-article.
						</p>
						<p>
							Molekula slouží především ke vkládání do dalších molekul, typicky do molekuly <a href="/_ins/tpl/m-01-04-widget.html">Widget</a>, jak je vidět v ukázce níže.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--6-12">
								<div class="ins-box-widget">
									<div class="ins-box-widget__header">
										<h2 class="ins-box-widget__title">
											<span class="icon icon-globe"></span>
											Zprávy / Muni informuje
										</h2>
									</div>

									<div class="ins-box-widget__body">
										<article class="ins-box-article">
											<h3 class="ins-box-article__title">
												<a href="#">
													<span class="ins-box-article__img">
														<img src="../img/illust/article-ins-01.jpg" width="130" height="98" alt="">
													</span>
													Prezident jmenoval nové profesory. Řada působí na Muni
												</a>
											</h3>
											<p class="ins-box-article__perex">
												Na návrh vědeckých rad podepsal 14. června prezident republiky Miloš Zeman jmenovací dekrety 60 profesorů. Řada z nich působí na Masarykově univerzitě. Podívejte se na jejich seznam níže. Slavnostní jmenování profesorů spojené s předáním dekretů od ministra školství proběhne v pondělí 25. června 2018 od 11 hodin ve Velké aule Karolina Univerzity Karlovy v Praze.
											</p>
											<p class="ins-box-article__meta">
												Publikováno dnes 14:12 • Zdroj: <a href="#">online.muni.cz</a>
											</p>
										</article>
									</div>

									<div class="ins-box-widget__footer">
										<a href="#">Zobrazit MUNI archiv zpráv</a>
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
