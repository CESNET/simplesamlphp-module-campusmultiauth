<?php
	$title = 'Kalendář';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>09</strong>
						Kalendář
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_calendar.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazování menšího kalendáře. Slouží pro ni div.ins-box-calendar.
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
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
