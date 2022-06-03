<?php
	$title = 'Personalizovat rozcestník - INS';
	$profile = true;
	$notifications = true;
	$footerSimple = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="ins-box-dashboard-header">
					<div class="ins-box-dashboard-header__heading">
						<h1 class="ins-box-dashboard-header__title h0 primary">Personalizovat rozcestník</h1>
					</div>

					<p class="ins-box-dashboard-header__perex">
						Váš <a href="#">rozcestníkem</a> může být velmi osobní. Sestavte si ho podle svých potřeb, přesně tak jak potřebujete.
					</p>
				</div>

				<h2 class="h4">Zprávy</h2>
				<div class="ins-box-widget">
					<div class="ins-box-widget__body ins-box-widget__body--compact">
						<div class="ins-box-settings">
							<table class="ins-box-settings__table">
								<colgroup>
									<col style="width: 45%;">
									<col style="width: 20%;">
									<col style="width: 20%;">
									<col style="width: 15%;">
								</colgroup>
								<thead>
									<tr>
										<th>Widgety</th>
										<th class="center">Zobrazit v rozcestníku</th>
										<th>Velikost</th>
										<th class="right"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-globe"></span>
												</span>
												MUNI informuje
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox1" value="4" disabled="disabled" checked="checked">
												<span></span>
											</label>
										</td>
										<td data-before="Velikost">
											<p class="u-mb-0">
												<label for="select-0" class="vhide">Velikost</label>
												<span class="inp-fix inp-fix--select">
													<select name="select" id="select-0" class="inp-select inp-select--small">
														<option value="0">1/3 Třetina</option>
														<option value="1">2/3 Dvě třetiny</option>
														<option value="1" selected>3/3 Na celou šířku</option>
													</select>
												</span>
											</p>
										</td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr>
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-comment-alt"></span>
												</span>
												Zprávy
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox2" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td data-before="Velikost">
											<p class="u-mb-0">
												<label for="select-1" class="vhide">Velikost</label>
												<span class="inp-fix inp-fix--select">
													<select name="select" id="select-1" class="inp-select inp-select--small">
														<option value="0">1/3 Třetina</option>
														<option value="1" selected>2/3 Dvě třetiny</option>
														<option value="1">3/3 Na celou šířku</option>
													</select>
												</span>
											</p>
										</td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-comment-alt"></span>
												</span>
												Yammer
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox3" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-comment-alt"></span>
												</span>
												Zprávy ze stránek www.online.muni.cz
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox4" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-comment-alt"></span>
												</span>
												Pozvánky na fakultní a univerzitní akce
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox5" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-comment-alt"></span>
												</span>
												Vývěska IS
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox6" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr class="ins-box-settings__lvl-2">
										<td>
											<a href="#" class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-plus-circle"></span>
												</span>
												<span class="text-icon__label">Přidat další zdroj zpráv</span>
											</a>
										</td>
										<td class="center"></td>
										<td></td>
										<td class="right"></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

				<h2 class="h4">Kalendář</h2>
				<div class="ins-box-widget">
					<div class="ins-box-widget__body ins-box-widget__body--compact">
						<div class="ins-box-settings">
							<table class="ins-box-settings__table">
								<colgroup>
									<col style="width: 45%;">
									<col style="width: 20%;">
									<col style="width: 20%;">
									<col style="width: 15%;">
								</colgroup>
								<thead>
									<tr>
										<th>Widgety</th>
										<th class="center">Zobrazit v rozcestníku</th>
										<th>Velikost</th>
										<th class="right"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-calendar-alt"></span>
												</span>
												Kalendář
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox7" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td data-before="Velikost">
											<p class="u-mb-0">
												<label for="select-2" class="vhide">Velikost</label>
												<span class="inp-fix inp-fix--select">
													<select name="select" id="select-2" class="inp-select inp-select--small">
														<option value="0" selected>1/3 Třetina</option>
														<option value="1">2/3 Dvě třetiny</option>
														<option value="1">3/3 Na celou šířku</option>
													</select>
												</span>
											</p>
										</td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-calendar-alt"></span>
												</span>
												Můj kalendář
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox8" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-calendar-alt"></span>
												</span>
												Můj rozvrh učitele
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox9" value="4" disabled="disabled">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-calendar-alt"></span>
												</span>
												Rozvrh akademického roku
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox10" value="4" disabled="disabled">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-calendar-alt"></span>
												</span>
												Rychlý přehled
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox11" value="4" disabled="disabled">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr class="ins-box-settings__lvl-2">
										<td>
											<a href="#" class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-plus-circle"></span>
												</span>
												<span class="text-icon__label">Přidat vlastní kalendář (ICS)</span>
											</a>
										</td>
										<td class="center"></td>
										<td></td>
										<td class="right"></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

				<h2 class="h4">Denní menu</h2>
				<div class="ins-box-widget">
					<div class="ins-box-widget__body ins-box-widget__body--compact">
						<div class="ins-box-settings">
							<table class="ins-box-settings__table">
								<colgroup>
									<col style="width: 45%;">
									<col style="width: 20%;">
									<col style="width: 20%;">
									<col style="width: 15%;">
								</colgroup>
								<thead>
									<tr>
										<th>Widgety</th>
										<th class="center">Zobrazit v rozcestníku</th>
										<th>Velikost</th>
										<th class="right"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-utensils"></span>
												</span>
												Denní menu
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox12" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td data-before="Velikost">
											<p class="u-mb-0">
												<label for="select-3" class="vhide">Velikost</label>
												<span class="inp-fix inp-fix--select">
													<select name="select" id="select-3" class="inp-select inp-select--small">
														<option value="0" selected>1/3 Třetina</option>
														<option value="1">2/3 Dvě třetiny</option>
														<option value="1">3/3 Na celou šířku</option>
													</select>
												</span>
											</p>
										</td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-utensils"></span>
												</span>
												POST Cafe & Bakery
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox13" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-utensils"></span>
												</span>
												Menza Veveří
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox14" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-utensils"></span>
												</span>
												SKØG Urban Hub
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox15" value="4" disabled="disabled">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
									<tr class="ins-box-settings__lvl-2">
										<td data-before="Widget">
											<span class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-utensils"></span>
												</span>
												Academic restaurant
											</span>
										</td>
										<td class="center" data-before="Viditelný">
											<label class="inp-item inp-item--checkbox inp-item--standalone">
												<input type="checkbox" name="checkbox16" value="4" checked="checked">
												<span></span>
											</label>
										</td>
										<td></td>
										<td class="right" data-before="Akce">
											<a href="#">Nastavení</a>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr class="ins-box-settings__lvl-2">
										<td>
											<a href="#" class="text-icon">
												<span class="text-icon__icon">
													<span class="icon icon-plus-circle"></span>
												</span>
												<span class="text-icon__label">Přidat restauraci nebo menzu</span>
											</a>
										</td>
										<td class="center"></td>
										<td></td>
										<td class="right"></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
