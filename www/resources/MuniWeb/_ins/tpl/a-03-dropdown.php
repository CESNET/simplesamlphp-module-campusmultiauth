<?php
	$title = 'Dropdown v menu';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>3</strong>
						Dropdown v menu
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/_ins/css/atoms/_dropdown.scss</br>
						<strong>Zdrojové JS:</strong> /src/_ins/js/components/_dropdown.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Atom dropdown menu se využívá uvnitř větších komponent, například v obecném boxu <a href="/_ins/tpl/m-01-04-widget.html">Widget</a>. Pro funkčnost JS je potřeba na obal přidat data-atribut "data-dropdown". Slouží pro něj div.ins-dropdown.
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
