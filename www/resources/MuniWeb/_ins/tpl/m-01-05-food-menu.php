<?php
	$title = 'Jídelníček';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>08</strong>
						Jídelníček
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_food-menu.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazování jídelníčků. Slouží pro ni div.ins-box-food-menu.
						</p>
						<p>
							Molekula slouží především ke vkládání do dalších molekul, typicky do molekuly <a href="/_ins/tpl/m-01-04-widget.html">widget</a>, jak je vidět v ukázce níže.
						</p>
						<p>
							Otevirání a zavírání zajišťuje molekula <a href="../../tpl/m-02-04-rozklikavaci-boxy.html">ozklikávací box</a>, která je v původním frameworku.
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
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
										</div>
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
