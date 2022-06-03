<?php
	$title = 'Rozcestník - INS';
	$profile = true;
	$notifications = true;
	$footerSimple = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="ins-box-dashboard-header ins-box-dashboard-header--pulled">
					<div class="ins-box-dashboard-header__wrap">
						<div class="ins-box-dashboard-header__img">
							<img src="../img/illust/dashboard-header.jpg" width="1170" height="250" alt="">
						</div>

						<div class="ins-box-dashboard-header__avatar">
							<img src="../img/illust/avatar.jpg" width="100" height="100" alt="">
						</div>

						<p class="ins-box-dashboard-header__personalize">
							<a href="#" class="ins-box-dashboard-header__action ins-box-dashboard-header__action--arrow">
								Personalizovat
								<span class="icon icon-cog"></span>
							</a>
						</p>
					</div>

					<div class="ins-box-dashboard-header__heading">
						<h1 class="ins-box-dashboard-header__title h0 primary">Hezké páteční poledne, Martine.</h1>
					</div>
				</div>

				<div class="grid">
					<div class="grid__cell size--m--4-12">
						<div class="ins-box-summary">
							<p class="ins-box-summary__count">
								5
								<span class="icon icon-envelope"></span>
							</p>
							<p class="ins-box-summary__title">Nepřečtené zprávy v poště</p>
						</div>
					</div>

					<div class="grid__cell size--m--4-12">
						<div class="ins-box-summary ins-box-summary--red">
							<p class="ins-box-summary__count">
								14
								<span class="icon icon-calendar-check"></span>
							</p>
							<p class="ins-box-summary__title">Událostí ke schválení</p>
						</div>
					</div>

					<div class="grid__cell size--m--4-12">
						<div class="ins-box-summary">
							<p class="ins-box-summary__count">
								6
								<span class="icon icon-bell"></span>
							</p>
							<p class="ins-box-summary__title">Upozornění</p>
						</div>
					</div>
				</div>

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

								<article class="ins-box-article">
									<h3 class="ins-box-article__title">
										<a href="#">
											<span class="ins-box-article__img">
												<img src="../img/illust/article-ins-02.jpg" width="130" height="98" alt="">
											</span>
											Noví docenti Masarykovy univerzity převzali dekrety od rektora
										</a>
									</h3>
									<p class="ins-box-article__perex">
										Na slavnostní ceremonii, která se v pátek 15. června uskutečnila v refektáři Mendelova muzea, převzalo od rektora Mikuláše Beka jmenovací dekrety celkem 15 nových docentů z pěti fakult, kteří se úspěšně habilitovali na Masarykově univerzitě. Podívejte se na jejich seznam a profily. Kompletní fotogalerii najdete na <a href="#">Facebooku</a>.
									</p>
									<p class="ins-box-article__meta">
										Publikováno 15. června 2018 11:10 • Zdroj: <a href="#">online.muni.cz</a>
									</p>
								</article>
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
								<div class="box-accordion box-accordion--small box-accordion--bordered-inside">
									<div class="box-accordion__item is-open">
										<h2 class="box-accordion__title">
											<a href="#" class="box-accordion__title__link">
												<span class="box-accordion__title__name">Poslední navštívené</span>
												<span class="icon icon icon-angle-down"></span>
											</a>
										</h2>
										<div class="box-accordion__box">
											<div class="box-accordion__inner">
												<ul class="list-blank">
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg bg-blue-dark">
																<span class="icon icon-filter"></span>
															</span>
															<span class="text-icon__label">Yammer MUNI</span>
														</a>
													</li>
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg">M</span>
															<span class="text-icon__label">MUNI kalendář</span>
														</a>
													</li>
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg">ZP</span>
															<span class="text-icon__label">Zpravodajský portál Masarykovy univerzity</span>
														</a>
													</li>
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg bg-phil">
																<span class="icon icon-table"></span>
															</span>
															<span class="text-icon__label">Úřední deska</span>
														</a>
													</li>
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg bg-corn">NO</span>
															<span class="text-icon__label">Nově vypsané granty</span> <small>K dispozici jsou 3 nové granty</small>
														</a>
													</li>
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg bg-trinidad">GD</span>
															<span class="text-icon__label">GDPR guidelines</span>
														</a>
													</li>
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg bg-violet">NO</span>
															<span class="text-icon__label">Nové publikace</span> <small>Celkem 12 nových publikací</small>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="box-accordion__item">
										<h2 class="box-accordion__title">
											<a href="#" class="box-accordion__title__link">
												<span class="box-accordion__title__name">Diplomka</span>
												<span class="icon icon icon-angle-down"></span>
											</a>
										</h2>
										<div class="box-accordion__box">
											<div class="box-accordion__inner">
												<ul class="list-blank">
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg bg-blue-dark">
																<span class="icon icon-filter"></span>
															</span>
															<span class="text-icon__label">Yammer MUNI</span>
														</a>
													</li>
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg">M</span>
															<span class="text-icon__label">MUNI kalendář</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="box-accordion__item">
										<h2 class="box-accordion__title">
											<a href="#" class="box-accordion__title__link">
												<span class="box-accordion__title__name">Formuláře, výkazy</span>
												<span class="icon icon icon-angle-down"></span>
											</a>
										</h2>
										<div class="box-accordion__box">
											<div class="box-accordion__inner">
												<ul class="list-blank">
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg bg-blue-dark">
																<span class="icon icon-filter"></span>
															</span>
															<span class="text-icon__label">Yammer MUNI</span>
														</a>
													</li>
													<li>
														<a href="#" class="text-icon">
															<span class="text-icon__icon text-icon__icon--bg">M</span>
															<span class="text-icon__label">MUNI kalendář</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="grid__cell size--l--6-12">
						<div class="ins-box-widget">
							<div class="ins-box-widget__header">
								<h2 class="ins-box-widget__title">
									<span class="icon icon-utensils"></span>
									Denní menu
								</h2>
							</div>

							<div class="ins-box-widget__body ins-box-widget__body--no-padding">
								<div class="box-accordion box-accordion--small box-accordion--bordered-inside">
									<div class="box-accordion__item is-open">
										<h2 class="box-accordion__title">
											<a href="#" class="box-accordion__title__link">
												<span class="box-accordion__title__name">POST Cafe & Bakery</span>
												<span class="icon icon icon-angle-down"></span>
											</a>
										</h2>
										<div class="box-accordion__box">
											<div class="box-accordion__inner">
												<div class="ins-box-food-menu">
													<p class="ins-box-food-menu__img">
														<img src="../img/illust/menu-01.jpg" width="130" height="98" alt="">
													</p>

													<ul class="ins-box-food-menu__list">
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">01</span>
																Hovězí asijská
															</span>

															<span class="ins-box-food-menu__price">46 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">02</span>
																Salát s kozím sýrem, hrozny a vlašskými ořechy, pečivo
															</span>

															<span class="ins-box-food-menu__price">109 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">03</span>
																Sandwich Caprese – rajčata, mozzarella, rajčatové pesto, bazalka
															</span>

															<span class="ins-box-food-menu__price">109 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">04</span>
																BLT sandwich s pečenými batáty, salát
															</span>

															<span class="ins-box-food-menu__price">69 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">05</span>
																Řepový hummus s fetou a čerstvým pečivem
															</span>

															<span class="ins-box-food-menu__price">84 Kč</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="box-accordion__item">
										<h2 class="box-accordion__title">
											<a href="#" class="box-accordion__title__link">
												<span class="box-accordion__title__name">Menza Veveří</span>
												<span class="icon icon icon-angle-down"></span>
											</a>
										</h2>
										<div class="box-accordion__box">
											<div class="box-accordion__inner">
												<div class="ins-box-food-menu">
													<p class="ins-box-food-menu__img">
														<img src="../img/illust/menu-01.jpg" width="130" height="98" alt="">
													</p>

													<ul class="ins-box-food-menu__list">
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">01</span>
																Hovězí asijská
															</span>

															<span class="ins-box-food-menu__price">46 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">02</span>
																Salát s kozím sýrem, hrozny a vlašskými ořechy, pečivo
															</span>

															<span class="ins-box-food-menu__price">109 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">03</span>
																Sandwich Caprese – rajčata, mozzarella, rajčatové pesto, bazalka
															</span>

															<span class="ins-box-food-menu__price">109 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">04</span>
																BLT sandwich s pečenými batáty, salát
															</span>

															<span class="ins-box-food-menu__price">69 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">04</span>
																Řepový hummus s fetou a čerstvým pečivem
															</span>

															<span class="ins-box-food-menu__price">84 Kč</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="box-accordion__item">
										<h2 class="box-accordion__title">
											<a href="#" class="box-accordion__title__link">
												<span class="box-accordion__title__name">SKØG Urban Hub</span>
												<span class="icon icon icon-angle-down"></span>
											</a>
										</h2>
										<div class="box-accordion__box">
											<div class="box-accordion__inner">
												<div class="ins-box-food-menu">
													<p class="ins-box-food-menu__img">
														<img src="../img/illust/menu-01.jpg" width="130" height="98" alt="">
													</p>

													<ul class="ins-box-food-menu__list">
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">01</span>
																Hovězí asijská
															</span>

															<span class="ins-box-food-menu__price">46 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">02</span>
																Salát s kozím sýrem, hrozny a vlašskými ořechy, pečivo
															</span>

															<span class="ins-box-food-menu__price">109 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">03</span>
																Sandwich Caprese – rajčata, mozzarella, rajčatové pesto, bazalka
															</span>

															<span class="ins-box-food-menu__price">109 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">04</span>
																BLT sandwich s pečenými batáty, salát
															</span>

															<span class="ins-box-food-menu__price">69 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">04</span>
																Řepový hummus s fetou a čerstvým pečivem
															</span>

															<span class="ins-box-food-menu__price">84 Kč</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="box-accordion__item">
										<h2 class="box-accordion__title">
											<a href="#" class="box-accordion__title__link">
												<span class="box-accordion__title__name">Academic restaurant</span>
												<span class="icon icon icon-angle-down"></span>
											</a>
										</h2>
										<div class="box-accordion__box">
											<div class="box-accordion__inner">
												<div class="ins-box-food-menu">
													<p class="ins-box-food-menu__img">
														<img src="../img/illust/menu-01.jpg" width="130" height="98" alt="">
													</p>

													<ul class="ins-box-food-menu__list">
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">01</span>
																Hovězí asijská
															</span>

															<span class="ins-box-food-menu__price">46 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">02</span>
																Salát s kozím sýrem, hrozny a vlašskými ořechy, pečivo
															</span>

															<span class="ins-box-food-menu__price">109 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">03</span>
																Sandwich Caprese – rajčata, mozzarella, rajčatové pesto, bazalka
															</span>

															<span class="ins-box-food-menu__price">109 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">04</span>
																BLT sandwich s pečenými batáty, salát
															</span>

															<span class="ins-box-food-menu__price">69 Kč</span>
														</li>
														<li class="ins-box-food-menu__item">
															<span class="text-icon">
																<span class="text-icon__icon text-icon__icon--bg">04</span>
																Řepový hummus s fetou a čerstvým pečivem
															</span>

															<span class="ins-box-food-menu__price">84 Kč</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="grid__cell size--l--6-12">
						<div class="ins-box-widget">
							<div class="ins-box-widget__header">
								<h2 class="ins-box-widget__title">
									<span class="icon icon-calendar-alt"></span>
									Kalendář
								</h2>

								<div class="ins-box-widget__actions">
									<div class="ins-dropdown">
										<a href="#" class="ins-box-widget__action" data-dropdown>
											Filtrovat
											<span class="icon icon-filter"></span>
										</a>

										<div class="ins-dropdown__menu">
											<div class="inp-items inp-items--dropdown">
												<ul class="inp-items__list">
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox" checked>
															<span>Yammer</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox" checked>
															<span>Stránky online.muni.cz</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox">
															<span>Pozvánky na fakultní a univerzitní akce</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox">
															<span>Další specifikovaný zdroj</span>
														</label>
													</li>
												</ul>
											</div>

											<hr class="ins-dropdown__divider">

											<div class="inp-items inp-items--dropdown">
												<ul class="inp-items__list">
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox">
															<span>Zobrazit skryté příspěvky</span>
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="ins-box-widget__body ins-box-widget__body--no-padding">
								<div class="ins-box-calendar">
									<div class="ins-box-calendar__header">
										<ul class="ins-box-calendar__menu-list" style="margin-bottom: -15px;"> <!-- Záporný margin rovný šířce scrollbaru - nutné spočítat pomocí JS (kvůli různým šířkám v různých prohlížečích) -->
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link is-active">Dnes</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">St 11.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Čt 12.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Pá 13.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">So 14.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Ne 15.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Po 16.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Út 17.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">St 18.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Čt 19.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Pá 20.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">So 21.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Ne 22.</a>
											</li>
											<li class="ins-box-calendar__menu-item">
												<a href="#" class="ins-box-calendar__menu-link">Po 23.</a>
											</li>
										</ul>

										<a href="#" class="ins-box-calendar__nav ins-box-calendar__nav--prev">
											<span class="icon icon-angle-left"></span>
											<span class="vhide">Předchozí</span>
										</a>

										<a href="#" class="ins-box-calendar__nav ins-box-calendar__nav--next is-visible">
											<span class="icon icon-angle-right"></span>
											<span class="vhide">Následující</span>
										</a>
									</div>

									<div class="ins-box-calendar__body">
										<ul class="ins-box-calendar__list">
											<li class="ins-box-calendar__item">
												<a href="#" class="ins-box-calendar__item-link">
													Schůzka s Karlem u mě v kanceláři
												</a>
												<span class="ins-box-calendar__item-meta">
													9:15–9:45 <small>• Google Cal</small>
												</span>
											</li>
											<li class="ins-box-calendar__item">
												<a href="#" class="ins-box-calendar__item-link">
													PV168 Seminář programování Java
												</a>
												<span class="ins-box-calendar__item-meta">
													10:30–11:30 <small>• Rozvrh učitele</small>
												</span>
											</li>
											<li class="ins-box-calendar__item">
												<a href="#" class="ins-box-calendar__item-link">
													Objednat toner do tiskárny
												</a>
												<span class="ins-box-calendar__item-meta">
													11:45–12:00 <small>• Google Cal</small>
												</span>
											</li>
											<li class="ins-box-calendar__item">
												<a href="#" class="ins-box-calendar__item-link">
													Oběd s rektorem
												</a>
												<span class="ins-box-calendar__item-meta">
													13:15–14:15 <small>• O365</small><br>
													Místo: KOISHI fish & sushi restaurant
												</span>
											</li>
											<li class="ins-box-calendar__item">
												<a href="#" class="ins-box-calendar__item-link">
													Vyzvednout opravený telefon
												</a>
												<span class="ins-box-calendar__item-meta">
													15:15–16:00 <small>• Google Cal</small>
												</span>
											</li>
											<li class="ins-box-calendar__item">
												<a href="#" class="ins-box-calendar__item-link">
													Schůzka projektu Portál
												</a>
												<span class="ins-box-calendar__item-meta">
													16:15–17:30 <small>• Google Cal</small>
												</span>
											</li>
										</ul>

										<p class="ins-box-calendar__more">
											<a href="#">+3 další</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="grid__cell size--l--12-12">
						<div class="ins-box-widget">
							<div class="ins-box-widget__header">
								<h2 class="ins-box-widget__title">
									<span class="icon icon-comment-alt"></span>
									Zprávy
								</h2>

								<div class="ins-box-widget__actions">
									<div class="ins-dropdown">
										<a href="#" class="ins-box-widget__action" data-dropdown>
											Filtrovat
											<span class="icon icon-filter"></span>
										</a>

										<div class="ins-dropdown__menu">
											<div class="inp-items inp-items--dropdown">
												<ul class="inp-items__list">
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox" checked>
															<span>Yammer</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox" checked>
															<span>Stránky online.muni.cz</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox">
															<span>Pozvánky na fakultní a univerzitní akce</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox">
															<span>Další specifikovaný zdroj</span>
														</label>
													</li>
												</ul>
											</div>

											<hr class="ins-dropdown__divider">

											<div class="inp-items inp-items--dropdown">
												<ul class="inp-items__list">
													<li class="inp-items__item">
														<label class="inp-item inp-item--checkbox">
															<input type="checkbox">
															<span>Zobrazit skryté příspěvky</span>
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<a href="#" class="ins-box-widget__action">
										Napsat příspěvek
										<span class="icon icon-pen"></span>
									</a>
								</div>
							</div>

							<div class="ins-box-widget__body">
								<div class="ins-box-chat-message">
									<p class="ins-box-chat-message__avatar">
										<img src="../img/illust/avatar.jpg" width="48" heigh="48" alt="">
									</p>

									<p class="ins-box-chat-message__name">
										<a href="#">Ondřej Krajtl</a>
									</p>
									<p class="ins-box-chat-message__meta">
										Před hodinou v <a href="#">Yammer</a> skupině <a href="#">Univerzita a média</a>
									</p>
									<div class="ins-box-chat-message__content">
										<p>
											Minulý týden proběhlo představení knihy Barvy chorvatské Moravy, která vznikla na Ústavu evropské etnologie FF MU (<a href="#">https://www.phil.muni.cz/kalendar-akci/2696-prezentace-knihy-barvy-chorvatske-moravy</a>). Knihy si povšimli také v České televizi: <a href="#">http://www.ceskatelevize.cz/porady/1181680258-tyden-v-regionech-brno/318281381890414-tyden-v-regionech/</a>
										</p>
									</div>
									<p class="ins-box-chat-message__likes">
										Příspěvek se líbí <a href="#">Tereza Fojtová</a>, <a href="#">Martina Fojtů</a>, <a href="#">Ema Wiesnerová</a> a <a href="#">6 dalším</a>
									</p>
									<p class="ins-box-chat-message__actions">
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-thumbs-up"></span>
											Líbí se mi
										</a>
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-reply"></span>
											Chci reagovat
										</a>
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-eye-slash"></span>
											Skrýt
										</a>
									</p>
								</div>

								<div class="ins-box-chat-message">
									<p class="ins-box-chat-message__avatar bg-green-dark">OVR</p>

									<p class="ins-box-chat-message__name">
										<a href="#">Odbor výzkumu RMU</a>
									</p>
									<p class="ins-box-chat-message__meta">
										Včera 14:23 v <a href="#">Yammer</a> skupině <a href="#">Univerzita a média</a>
									</p>
									<div class="ins-box-chat-message__content">
										<p>
											Gill Wells, působící jako vedoucí evropského týmu univerzity v Oxfordu, přednášela 5. dubna na semináři věnovaném prestižním grantům Marie Skłodowska-Curie (HORIZONT 2020). Gill se podělila o své dlouholeté zkušenosti s přípravou projektových žádostí zejména s vědci, kteří chtějí o tyto granty žádat. Její přednášku doplnil konkrétními postřehy úspěšný žadatel… <a href="#" class="ins-box-chat-message__more-link">Více <span class="icon icon-angle-right"></span></a>
										</p>
									</div>
									<div class="ins-box-chat-message__gallery">
										<div class="ins-box-chat-message__img">
											<img src="../img/illust/chat-message-01.jpg" width="200" height="100" alt="">
										</div>

										<div class="ins-box-chat-message__img">
											<img src="../img/illust/chat-message-02.jpg" width="200" height="100" alt="">
										</div>

										<div class="ins-box-chat-message__img">
											<img src="../img/illust/chat-message-03.jpg" width="200" height="100" alt="">
										</div>

										<a href="#" class="ins-box-chat-message__gallery-link">+3</a>
									</div>
									<p class="ins-box-chat-message__likes">
										Příspěvek se líbí <a href="#">Markéta Burešová</a>, <a href="#">Ondřej Krajtl</a>, <a href="#">Dominika Hobzová</a> a <a href="#">74 dalším</a>
									</p>
									<p class="ins-box-chat-message__actions">
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-thumbs-up"></span>
											Líbí se mi
										</a>
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-reply"></span>
											Chci reagovat
										</a>
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-eye-slash"></span>
											Skrýt
										</a>
									</p>
								</div>

								<div class="ins-box-chat-message">
									<p class="ins-box-chat-message__avatar ins-box-chat-message__avatar--bg">M</p>

									<p class="ins-box-chat-message__name">
										<a href="#">Absolventky Muni tvoří architektonického průvodce Brnem</a>
									</p>
									<p class="ins-box-chat-message__meta">
										8. května 2018 14:23 na <a href="#">online.muni.cz</a> v sekci <a href="#">Absolventi</a>
									</p>
									<div class="ins-box-chat-message__content">
										<p>
											Narazil na ně každý, kdo kdy udělal aspoň pár kroků po Brně. Drobné bílé značky na chodnících tvořené zkratkou BAM a čísly označují zajímavé stavby patřící do Brněnského architektonického manuálu. Za celým velkým projektem stojí i absolventky dějin umění na Masarykově univerzitě Petra… <a href="#" class="ins-box-chat-message__more-link">Více <span class="icon icon-angle-right"></span></a>
										</p>
									</div>
									<div class="ins-box-chat-message__gallery">
										<div class="ins-box-chat-message__img">
											<img src="../img/illust/chat-message-04.jpg" width="200" height="100" alt="">
										</div>
									</div>
									<p class="ins-box-chat-message__actions">
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-eye-slash"></span>
											Skrýt
										</a>
									</p>
								</div>

								<div class="ins-box-chat-message">
									<p class="ins-box-chat-message__avatar bg-green-dark">M</p>

									<p class="ins-box-chat-message__name">
										<a href="#">Testovací software vyvinutý psychology z Muni využijí vojáci</a>
									</p>
									<p class="ins-box-chat-message__meta">
										9. května 2018 14:23 na <a href="#">online.muni.cz</a> v sekci <a href="#">Věda & výzkum</a>
									</p>
									<div class="ins-box-chat-message__content">
										<p>
											Licenci na software pro online psychologickou diagnostiku Hypothesis získala od Masarykovy univerzity Ústřední vojenská nemocnice v Praze. Nástroj původně vyvíjený pro kartografy přepracovali odborníci z filozofické fakulty tak, že ho lze využít pro psychologickou diagnostiku. Nemocnice za zavedení, čtyřleté využívání softwaru a trojice testů kognitivních funkcí… <a href="#" class="ins-box-chat-message__more-link">Více <span class="icon icon-angle-right"></span></a>
										</p>
									</div>
									<div class="ins-box-chat-message__gallery">
										<div class="ins-box-chat-message__img">
											<img src="../img/illust/chat-message-05.jpg" width="200" height="100" alt="">
										</div>
									</div>
									<p class="ins-box-chat-message__actions">
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-eye-slash"></span>
											Skrýt
										</a>
									</p>
								</div>

								<div class="ins-box-chat-message">
									<p class="ins-box-chat-message__avatar">
										<img src="../img/illust/avatar.jpg" width="48" heigh="48" alt="">
									</p>
									<p class="ins-box-chat-message__meta">
										9. května 2018 11:19 v <a href="#">Yammer</a> skupině <a href="#">Univerzita a média</a>
									</p>
									<div class="ins-box-chat-message__content">
										<p>
											Alena Žákovská z Přírodovědecké fakulty MU okomentovala pro Rovnost letošní rekordní počty klíšťat. Její komentář k situaci vyšel před časem i v Muni: <a href="#">https://www.online.muni.cz/vite/10602-klistata-si-letos-pospisila</a>
										</p>
									</div>
									<div class="ins-box-chat-message__gallery">
										<a href="#" class="ins-box-chat-message__preview">
											<div class="ins-box-chat-message__preview-img">
												<img src="../img/illust/chat-message-06.jpg" width="200" height="100" alt="">
											</div>
											<p class="ins-box-chat-message__preview-title">
												Jsme pro klíšťata slepá větev. Odhalíme je  a zabijeme, říká odbornice Žákovská
											</p>
											<p class="ins-box-chat-message__preview-source">brnensky.denik.cz</p>
										</a>
									</div>
									<p class="ins-box-chat-message__likes">
										Příspěvek se líbí <a href="#">Jindřiška Svobodová</a>, <a href="#">Zuzana Jayasundera</a> a <a href="#">Tereza Fojtová</a>
									</p>
									<p class="ins-box-chat-message__actions">
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-thumbs-up"></span>
											Líbí se mi
										</a>
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-reply"></span>
											Chci reagovat
										</a>
										<a href="#" class="ins-box-chat-message__action">
											<span class="icon icon-eye-slash"></span>
											Skrýt
										</a>
									</p>

									<div class="ins-box-chat-message__reactions">
										<div class="ins-crossroad-reactions">
											<div class="ins-crossroad-reactions__item">
												<div class="ins-crossroad-reactions__avatar">
													<img src="../img/illust/avatar.jpg" width="32" height="32" alt="">
												</div>

												<p class="ins-crossroad-reactions__name">
													<a href="#">Jan Šplíchal</a>
													<span class="ins-crossroad-reactions__meta">9. května 2018 11:22</span>
												</p>

												<div class="ins-crossroad-reactions__content">
													<p>
														Ehm... Z Přírodovědecké a PEDAGOGICKÉ fakulty ;-)
													</p>
												</div>
											</div>

											<div class="ins-crossroad-reactions__item">
												<div class="ins-crossroad-reactions__avatar">
													<img src="../img/illust/avatar.jpg" width="32" height="32" alt="">
												</div>

												<p class="ins-crossroad-reactions__name">
													<a href="#">David Pokorný</a> v odpovědi pro <a href="#">Jan Šplíchal</a>
													<span class="ins-crossroad-reactions__meta">8. května 2018 11:35</span>
												</p>

												<div class="ins-crossroad-reactions__content">
													<p>
														Aj, pardon.
													</p>
												</div>
											</div>

											<div class="ins-crossroad-reactions__item">
												<div class="ins-crossroad-reactions__avatar">
													<img src="../img/illust/avatar.jpg" width="32" height="32" alt="">
												</div>

												<div class="ins-crossroad-reactions__content">
													<div class="ins-crossroad-reactions__inp">
														<label for="chat-message" class="vhide">Reagovat</label>
														<span class="inp-fix inp-icon inp-icon--after">
															<textarea name="chat-message" id="chat-message" cols="30" rows="1" class="inp-text inp-text--small" placeholder="Reagovat"></textarea>
															<a href="#" class="btn-icon icon icon-link" title="Přidat přílohu">
																<span class="vhide">Přidat přílohu</span>
															</a>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="ins-box-widget__footer">
								<a href="#">Zobrazit více zpráv</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
