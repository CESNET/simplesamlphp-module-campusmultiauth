<?php
	$title = 'Nastavení';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>12</strong>
						Nastavení
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_settings.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazování natavení. Slouží pro ni div.ins-box-settings.
						</p>
						<p>
							Molekula slouží především ke vkládání do dalších molekul, typicky do molekuly <a href="/_ins/tpl/m-01-04-widget.html">Widget</a>, jak je zřejmé z ukázky níže.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="ins-box-widget">
							<div class="ins-box-widget__body ins-box-widget__body--compact">
								<div class="ins-box-settings">
									<table class="ins-box-settings__table">
										<colgroup>
											<col style="width: 3%;">
											<col style="width: 20%;">
											<col style="width: 27%;">
											<col style="width: 15%;">
											<col style="width: 20%;">
											<col style="width: 15%;">
										</colgroup>
										<thead>
											<tr>
												<th colspan="2">Kontaktní údaj</th>
												<th>Hodnota</th>
												<th>Zobrazit na vizitce</th>
												<th>Viditelnost</th>
												<th class="right"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="ins-box-settings__drag">
													<span class="icon icon-ellipsis-v-alt"></span>
												</td>
												<td data-before="Kontakt">Adresa kanceláře</td>
												<td data-before="Hodnota">kancelář 572</td>
												<td data-before="Na vizitce">
													<span class="text-icon text-icon--after">
														<span class="text-icon__icon orange">
															<span class="icon icon-id-card-alt"></span>
														</span>
														Ano
													</span>
												</td>
												<td data-before="Viditelnost">Zobrazit veřejnosti</td>
												<td class="right ins-box-settings__edit" data-before="Akce">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--small">
															<span class="icon icon-pen"></span>
														</span>
														<span class="text-icon__label">Upravit</span>
													</a>
												</td>
											</tr>
											<tr>
												<td class="ins-box-settings__drag">
													<span class="icon icon-ellipsis-v-alt"></span>
												</td>
												<td data-before="Kontakt">Telefon</td>
												<td data-before="Hodnota">549 493 766</td>
												<td data-before="Na vizitce">
													<span class="text-icon text-icon--after">
														<span class="text-icon__icon orange">
															<span class="icon icon-id-card-alt"></span>
														</span>
														Ano
													</span>
												</td>
												<td data-before="Viditelnost">Zobrazit veřejnosti</td>
												<td class="right ins-box-settings__edit" data-before="Akce">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--small">
															<span class="icon icon-pen"></span>
														</span>
														<span class="text-icon__label">Upravit</span>
													</a>
												</td>
											</tr>
											<tr>
												<td class="ins-box-settings__drag">
													<span class="icon icon-ellipsis-v-alt"></span>
												</td>
												<td data-before="Kontakt">E-mail</td>
												<td data-before="Hodnota">jakubicka@ics.muni.cz</td>
												<td data-before="Na vizitce">
													<span class="text-icon text-icon--after">
														<span class="text-icon__icon orange">
															<span class="icon icon-id-card-alt"></span>
														</span>
														Ano
													</span>
												</td>
												<td data-before="Viditelnost">Zobrazit veřejnosti</td>
												<td class="right ins-box-settings__edit" data-before="Akce">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--small">
															<span class="icon icon-pen"></span>
														</span>
														<span class="text-icon__label">Upravit</span>
													</a>
												</td>
											</tr>
											<tr>
												<td class="ins-box-settings__drag">
													<span class="icon icon-ellipsis-v-alt"></span>
												</td>
												<td data-before="Kontakt">E-mail</td>
												<td data-before="Hodnota">xjakubic@math.muni.cz</td>
												<td data-before="Na vizitce">Ne</td>
												<td data-before="Viditelnost">Zobrazit zaměstnancům</td>
												<td class="right ins-box-settings__edit" data-before="Akce">
													<a href="#" class="text-icon">
														<span class="text-icon__icon text-icon__icon--small">
															<span class="icon icon-pen"></span>
														</span>
														<span class="text-icon__label">Upravit</span>
													</a>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td></td>
												<td>
													<a href="#">Přidat nový údaj</a>
												</td>
												<td></td>
												<td></td>
												<td></td>
												<td class="right"></td>
											</tr>
										</tfoot>
									</table>
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
