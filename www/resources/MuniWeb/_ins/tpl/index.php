<?php
	$title = 'MUNI framework';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						MUNI INS framework
					</h1>
				</div>

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

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Dokumentace frameworku</h2>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Atomy</h2>
					</div>

					<div class="sk-example__comment">
						<p>
							Atomy jsou základní stavební kameny frameworku. Jsou to nejmenší součásti frameworku, které jsou dále používány v molekulách a organismech. Typově jsou to např. formulářové prvky, štítky, typografie apod.
						</p>
					</div>

					<div class="u-mb-50">
						<ul>
							<li>
								<a href="/_ins/tpl/a-01-avatar.html">01 - Avatar</a>
								<span class="tag tag--phil">dokumentace</span>
							</li>
							<li>
								<a href="/_ins/tpl/a-02-list-blank.html">02 - Seznam</a>
								<span class="tag tag--phil">dokumentace</span>
							</li>
							<li>
								<a href="/_ins/tpl/a-03-dropdown.html">03 - Dropdown menu</a>
								<span class="tag tag--phil">dokumentace</span>
							</li>
							<li>
								<a href="/_ins/tpl/a-04-modal.html">04 - Modální okno</a>
								<span class="tag tag--phil">dokumentace</span>
							</li>
							<li>
								<a href="/_ins/tpl/a-05-calendar.html">05 - Kalendář</a>
								<span class="tag tag--phil">dokumentace</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Molekuly</h2>
					</div>

					<div class="sk-example__comment">
						<p>
							Molekuly jsou sloučeniny atomů a speciální struktury HTML. V našem případě je dále dělíme na formuláře, boxy, menu a výpisy. Molekuly v HTML poznáme na první pohled, protože jsou prefixované klíčovými slovy box-, form-, menu- či crossroad-, které jsou dále k nalezení v odpovídající složce.
						</p>
						<p>
							Každá molekula má spodní odsazení 50px.<br />
							Pokud je potřeba upravit rozestupy, pak využijte prosím utilit classy z <a href="a-00-framework.html#molekuly">SK mini frameworku</a>.
						</p>
					</div>

					<div class="u-mb-50">
						<ul>
							<li>
								<strong>01 – Boxy</strong>
								<ul>
									<li>
										<a href="/_ins/tpl/m-01-notifikace.html">01.01 – Notifikace</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-02-dashboard-header.html">01.02 – Hlavička dashboardu</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-03-summary.html">01.03 – Souhrn</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-04-widget.html">01.04 – Widget</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-05-food-menu.html">01.05 – Jídelníček</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-06-article.html">01.06 – Články</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-07-calendar.html">01.07 – Kalendář</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-08-chat-message.html">01.08 – Zpráva v chatu</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-10-settings.html">01.10 – Nastavení</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-11-documents.html">01.11 – Dokumenty</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-01-12-images.html">01.12 – Obrázky</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
								</ul>
							</li>
							<li>
								<strong>02 – Rozcestníky</strong>
								<ul>
									<li>
										<a href="/_ins/tpl/m-02-01-profilovy.html">02.01 – Profilový</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
									<li>
										<a href="/_ins/tpl/m-02-02-reactions.html">02.02 – Reakce</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
								</ul>
							</li>
							<li>
								<strong>03 – Menu</strong>
								<ul>
									<li>
										<a href="/_ins/tpl/m-03-01-profilove.html">03.01 – Profilové</a>
										<span class="tag tag--phil">dokumentace</span>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Organismy</h2>
					</div>

					<div class="sk-example__comment">
						<p>
							Organismy jsou větší části kódu, nejčastěji vznikají sloučením více různých molekul. V našem případě jsou organismy použity pro hlavičky a patičky.
						</p>
					</div>

					<div class="u-mb-50">
						<ul>
							<li>
								<a href="/_ins/tpl/o-01-hlavicka.html">01 - Hlavička</a>
								<span class="tag tag--phil">dokumentace</span>
							</li>
							<li>
								<a href="/_ins/tpl/o-02-paticka.html">02 - Patička</a>
								<span class="tag tag--phil">dokumentace</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázky poskládaných stránek</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Poskládané stránky z komponent frameworku.
						</p>
					</div>
					<div class="u-mb-50">
						<ul>
							<li><a href="/_ins/tpl/s-01-rozcestnik.html">01 – Rozcestník</a></li>
							<li><a href="/_ins/tpl/s-02-zpravy.html">02 - Zprávy</a></li>
							<li><a href="/_ins/tpl/s-03-moje-rychle-odkazy.html">03 - Moje rychlé odkazy</a></li>
							<li><a href="/_ins/tpl/s-04-denni-menu.html">04 - Denní menu</a></li>
							<li><a href="/_ins/tpl/s-05-personalizovat-rozcestnik.html">05 - Personalizovat rozcestník</a></li>
							<li><a href="/_ins/tpl/s-06-modalni-okno-moje-rychle-odkazy.html">06 - Modální okno Moje rychlé odkazy</a></li>
							<li><a href="/_ins/tpl/s-07-nastaveni-meho-profilu.html">07 - Nastavení mého profilu</a></li>
							<li><a href="/_ins/tpl/s-08-dokumenty.html">08 - Dokumenty</a></li>
							<li><a href="/_ins/tpl/s-09-kalendar.html">09 - Kalendář</a></li>
						</ul>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
