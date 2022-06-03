<?php
	$title = 'Výpis profilový';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>01</strong>
						Profilový rozcestník
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/crossroad/_profile.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							<strong>Tato molekula je viditelná pouze do maximální šířky okna 767px!</strong>
						</p>
						<p>
							Tato komponenta funguje v kooperaci se sekundárním menu v hlavičce, jelikož na responzivu dochází k přesunutí obsahu z hlavičky do hlavní částí stránky.
						</p>
						<p>
							Výchozí molekula pro profilový rozcestník. Slouží pro něj div.ins-crossroad-profile.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<nav class="ins-crossroad-profile" >
							<ul class="ins-crossroad-profile__list">
								<li class="ins-crossroad-profile__item">
									<a href="#" class="ins-crossroad-profile__link">
										<span class="icon icon-home"></span>
										Zprávy
									</a>
								</li>
								<li class="ins-crossroad-profile__item">
									<a href="#" class="ins-crossroad-profile__link">
										<span class="icon icon-home"></span>
										Moje rychlé odkazy
									</a>
								</li>
								<li class="ins-crossroad-profile__item">
									<a href="#" class="ins-crossroad-profile__link">
										<span class="icon icon-home"></span>
										Kalendář
									</a>
								</li>
								<li class="ins-crossroad-profile__item">
									<a href="#" class="ins-crossroad-profile__link">
										<span class="icon icon-home"></span>
										Dokumenty
									</a>
								</li>
								<li class="ins-crossroad-profile__item">
									<a href="#" class="ins-crossroad-profile__link">
										<span class="icon icon-home"></span>
										Denní menu
									</a>
								</li>
								<li class="ins-crossroad-profile__item">
									<a href="#" class="ins-crossroad-profile__link">
										<span class="icon icon-home"></span>
										Více aplikací
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
