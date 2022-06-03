<?php
	$title = 'Dokumenty';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>13</strong>
						Dokumenty
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_documents.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazování dokumentů. Slouží pro ni div.ins-box-documents.
						</p>
						<p>
							Molekula slouží především ke vkládání do dalších molekul, typicky do molekuly <a href="/_ins/tpl/m-01-04-widget.html">Widget</a>.
						</p>
						<p>
							Jakmile by vyhledávání ve výsledcích mělo hodně stránek, je nutné přidat a zaimplementovat obecný atom Paging do div.ins-box-documents__paging.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="ins-box-widget">
							<div class="ins-box-widget__header">
								<h2 class="ins-box-widget__title">
									<span class="icon icon-folder"></span>
									Dokumenty
								</h2>

								<div class="ins-box-widget__actions">
									<div class="ins-dropdown">
										<a href="#" class="ins-box-widget__action" data-dropdown>
											Řadit podle
											<span class="icon icon-sort"></span>
										</a>

										<div class="ins-dropdown__menu">
											<div class="inp-items inp-items--dropdown">
												<ul class="inp-items__list">
													<li class="inp-items__item">
														<label class="inp-item inp-item--radio">
															<input type="radio" name="sort" checked>
															<span>Yammer</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--radio">
															<input type="radio" name="sort">
															<span>Stránky online.muni.cz</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--radio">
															<input type="radio" name="sort">
															<span>Pozvánky na fakultní a univerzitní akce</span>
														</label>
													</li>
													<li class="inp-items__item">
														<label class="inp-item inp-item--radio">
															<input type="radio" name="sort">
															<span>Další specifikovaný zdroj</span>
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>

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

							<div class="ins-box-widget__body">
								<div class="ins-box-documents">
									<p class="ins-box-documents__search">
										<label for="documents-search" class="vhide">Hledat dokument</label>
										<span class="inp-fix inp-icon inp-icon--before">
											<input type="text" name="documents-search" id="documents-search" class="inp-text inp-text--small" placeholder="Hledat dokument">
											<button type="submit" class="btn-icon icon icon-search" title="Hledat">
												<span class="vhide">Hledat</span>
											</button>
										</span>
									</p>

									<table class="ins-box-documents__table">
										<thead>
											<tr>
												<th>Soubor</th>
												<th>Kategorie</th>
												<th class="right">Typ, velikost</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg bg-trinidad">
															<span class="icon icon-file-word"></span>
														</span>
														<span class="text-icon__label">MUNI–DZ–2018–012345</span> <small>před 12 minutami</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Dlouhodobý záměr</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 588kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg bg-trinidad">
															<span class="icon icon-file-word"></span>
														</span>
														<span class="text-icon__label">MUNI–SM–2018–EDEE12456</span> <small>před 36 minutami</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Směrnice</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 53kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg bg-trinidad">
															<span class="icon icon-file-word"></span>
														</span>
														<span class="text-icon__label">MUNI–SM–2018–EDC212BE</span> <small>před hodinou</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Směrnice</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 188kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg bg-green">
															<span class="icon icon-link"></span>
														</span>
														<span class="text-icon__label">Opatreni–ASD23REGNIMU–002</span> <small>před 8 hodinami</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Opatření</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 188kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg bg-corn">
															<span class="icon icon-link"></span>
														</span>
														<span class="text-icon__label">ZJK–2018–10–11</span> <small>včera, 11.36</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Zápisy z jednání kolegia</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 188kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg">
															<span class="icon icon-link"></span>
														</span>
														<span class="text-icon__label">AS–2018–10–10–C123</span> <small>předevčírem, 18.23</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Akademický senát</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 188kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg bg-green">
															<span class="icon icon-link"></span>
														</span>
														<span class="text-icon__label">AS–2018–10–10–C123</span> <small>před 3 dny</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Akademický senát</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 188kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg">
															<span class="icon icon-link"></span>
														</span>
														<span class="text-icon__label">AS–2018–10–10–C123</span> <small>před 3 dny</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Akademický senát</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 188kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg">
															<span class="icon icon-link"></span>
														</span>
														<span class="text-icon__label">Akad–senat–zasedani–AS–2018–1235ED82342–dlouhy–nazev–souboru</span> <small>před měsícem</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Akademický senát</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 188kB
													</span>
												</td>
											</tr>
											<tr>
												<td data-before="Soubor">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--bg">
															<span class="icon icon-link"></span>
														</span>
														<span class="text-icon__label">AS–2018–10–10–C123</span> <small>před 2 roky</small>
													</a>
												</td>
												<td data-before="Kategorie">
													<a href="#">Akademický senát</a>
												</td>
												<td class="right" data-before="Typ, velikost">
													<span class="file-type">
														<strong>.doc</strong> 188kB
													</span>
												</td>
											</tr>
										</tbody>
									</table>

									<div class="ins-box-documents__paging">
										<p class="paging">
											<span class="paging__pages">
												<a href="#" class="paging__pages__prev link-icon link-icon--before">
													<span class="icon icon-long-arrow-left"></span>
													Předchozí
												</a>
												<a href="#" class="paging__pages__item is-active">1</a>
												<a href="#" class="paging__pages__item">2</a>
												<a href="#" class="paging__pages__item">3</a>
												<a href="#" class="paging__pages__item">4</a>
												<a href="#" class="paging__pages__item">5</a>
												<a href="#" class="paging__pages__next link-icon link-icon--after">
													Další
													<span class="icon icon-long-arrow-right"></span>
												</a>
											</span>
											<span class="paging__pager">
												<strong class="paging__pager__item is-active">10</strong>
												<a href="#" class="paging__pager__item">50</a>
												<a href="#" class="paging__pager__item">100</a>
											</span>
										</p>
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
