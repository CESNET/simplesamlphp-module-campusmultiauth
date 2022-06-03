<?php
	$title = 'Zpráva z chatu';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>10</strong>
						Zpráva z chatu
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_chat-message.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazování zprávy v chatu. Slouží pro ni div.ins-box-chat-message.
						</p>
						<p>
							Molekula slouží především ke vkládání do dalších molekul, typicky do molekuly <a href="/_ins/tpl/m-01-04-widget.html">Widget</a>, jak je vidět v ukázce níže.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
