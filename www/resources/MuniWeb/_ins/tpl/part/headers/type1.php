<?php if ($fixedHeader): ?>
	<div class="header-fixed-wrap">
<?php endif; ?>
<header class="header<?php if ($type5): ?> header--nav-under<?php endif; ?><?php if ($hasHero): ?> header--hero<?php endif; ?><?php if ($profile == true): ?> ins-header<?php endif; ?>">
	<div class="row-main">

		<div class="header__wrap">
			<?php if ($title == 'Úvodní stránka'): ?>
			<h1 class="header__logo" role="banner">
			<?php else: ?>
				<p class="header__logo" role="banner">
			<?php endif; ?>

				<a href="#">
					<?php if ($faculty == 'phil') : ?>
						<?php include 'logo-phil.php' ?>
					<?php else : ?>
						<?php include 'logo.php' ?>
					<?php endif; ?>

				</a>
			<?php if ($title == 'Úvodní stránka'): ?>
				</h1>
			<?php else: ?>
				</p>
			<?php endif; ?>

			<div class="header__side">
				<form id="form-search" action="?" class="header__search" role="search">
					<fieldset>
						<p>
							<label for="search" class="header__search__label icon icon-search"><span class="vhide">Vyhledávání</span></label>
							<span class="inp-fix inp-icon inp-icon--after">
								<input type="text" name="search" id="search" class="inp-text" placeholder="Hledat..." />
								<button type="submit" class="btn-icon icon icon-search">
									<span class="vhide">Vyhledat</span>
								</button>
							</span>
						</p>
					</fieldset>
				</form>

				<div class="menu-lang" >
					<p class="menu-lang__selected">
						<a href="#" class="menu-lang__selected__link">
							English
						</a>
					</p>
				</div>

				<?php if ($profile == true): ?>
					<div class="ins-box-notifications" >
						<div class="ins-box-notifications__head">
							<div class="ins-box-notifications__label ins-box-notifications__label--full">
								5
								<span class="icon icon-envelope"></span>
							</div>
						</div>

						<div class="ins-box-notifications__head ins-box-notifications__head--divided">
							<div class="ins-box-notifications__label ins-box-notifications__label--left ins-box-notifications__label--warning">2</div>
							<div class="ins-box-notifications__label ins-box-notifications__label--right ins-box-notifications__label--dropdown">
								3
								<span class="icon icon-bell"></span>
								<span class="icon icon-angle-down"></span>
							</div>

							<div class="ins-box-notifications__body">
								<p class="h5">
									Ke schválení
								</p>
								<p class="ins-box-notifications__title">
									Cestovní příkazy
								</p>
								<ul class="ins-box-notifications__list">
									<li>
										<a href="#">CES/3301/194/18 Orémuš,DE,,21.10.18-26.10.18</a> <span class="ins-box-notifications__date ins-box-notifications__date--warning">Dnes 13:00</span>
									</li>
									<li>
										<a href="#">CES/3301/194/18 Orémuš,DE,,21.10.18-26.10.18</a> <span class="ins-box-notifications__date ins-box-notifications__date--warning">Dnes 13:00</span>
									</li>
									<li>
										<a href="#">CES/3301/194/18 Orémuš,DE,,21.10.18-26.10.18</a> <span class="ins-box-notifications__date ins-box-notifications__date--warning">Dnes 13:00</span>
									</li>
									<li>
										<a href="#">CES/3301/197/18 Matoušková,DE,,23.10.18-28.10.18</a> <span class="ins-box-notifications__date">St 26. 9. 2018, 15:00</span>
									</li>
									<li>
										<a href="#">CES/3301/194/18 Orémuš,DE,,21.10.18-26.10.18</a> <span class="ins-box-notifications__date">Dnes 13:00</span>
									</li>
								</ul>
								<p class="ins-box-notifications__title">
									Závazky
								</p>
								<ul class="ins-box-notifications__list">
									<li>
										<a href="#">ZAV/3315/726/18 knihy[11.09.2018]</a> <span class="ins-box-notifications__date">St 26. 9. 2018, 15:00</span>
									</li>
									<li>
										<a href="#">ZAV/3315/726/18 knihy[11.09.2018]</a> <span class="ins-box-notifications__date">Dnes 13:00</span>
									</li>
								</ul>
								<p class="ins-box-notifications__title">
									Upozornění
								</p>
								<ul class="ins-box-notifications__list">
									<li>
										Objednat stravenky na následující měsíc říjen <span class="ins-box-notifications__date">Stravenky</span>
									</li>
									<li>
										<a href="#">K dispozici výplatní lístek za měsíc srpen</a> <span class="ins-box-notifications__date">Výplatní lístek</span>
									</li>
								</ul>
								<div class="ins-box-notifications__bottom">
									<p>
										<a href="#" class="btn btn-primary btn-s">
											<span>Zobrazit vše</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<?php if ($langType2 !== true && $langType3 !== true && $langType4 !== true && $profile !== true): ?>
					<div class="menu-lang menu-lang--select" >
						<p class="menu-lang__selected">
							<a href="#" class="menu-lang__selected__link">
								English
							</a>
						</p>
						<p class="menu-lang__popup">
							<a href="#" class="menu-lang__popup__link">
								German
							</a>
							<a href="#" class="menu-lang__popup__link">
								Spain
							</a>
							<a href="#" class="menu-lang__popup__link">
								Česky
							</a>
						</p>
					</div>
				<?php endif; ?>


				<?php if ($langType2 == true): ?>
					<div class="menu-lang" >
						<p class="menu-lang__selected">
							<a href="#" class="menu-lang__selected__link">
								English
							</a>
							<a href="#" class="menu-lang__selected__link">
								German
							</a>
						</p>
					</div>
				<?php endif; ?>

				<?php if ($langType3 == true): ?>
					<div class="menu-lang menu-lang--select" >
						<p class="menu-lang__selected">
							<a href="#" class="menu-lang__selected__link">
								English
							</a>
						</p>
						<p class="menu-lang__popup">
							<a href="#" class="menu-lang__popup__link">
								German
							</a>
							<a href="#" class="menu-lang__popup__link">
								Spain
							</a>
							<a href="#" class="menu-lang__popup__link">
								Česky
							</a>
						</p>
					</div>
				<?php endif; ?>

				<?php if ($langType4 == true): ?>
					<div class="menu-lang menu-lang--select menu-lang--select-dark" >
						<p class="menu-lang__selected">
							<a href="#" class="menu-lang__selected__link">
								English
							</a>
						</p>
						<p class="menu-lang__popup">
							<a href="#" class="menu-lang__popup__link">
								German
							</a>
							<a href="#" class="menu-lang__popup__link">
								Spain
							</a>
							<a href="#" class="menu-lang__popup__link">
								Česky
							</a>
						</p>
					</div>
				<?php endif; ?>

				<?php if ($profile == true): ?>
					<div class="ins-menu-profile" >
						<p class="ins-menu-profile__selected">
							<a href="#" class="ins-menu-profile__selected__link">
								<span class="ins-menu-profile__desktop">RNDr. Martin Jakubička</span>
								<span class="ins-menu-profile__mobile">&nbsp;</span>
							</a>
						</p>
						<p class="ins-menu-profile__popup">
							<a href="#" class="ins-menu-profile__popup__link">
								Položka
							</a>
							<a href="#" class="ins-menu-profile__popup__link">
								Položka
							</a>
							<a href="#" class="ins-menu-profile__popup__link">
								Položka
							</a>
						</p>
						<p class="ins-avatar">
							<a href="#" class="ins-avatar__link">
								<!-- <img src="../../img/illust/avatar.jpg" alt="" width="40" height="40"/> -->
								<span class="ins-avatar__noimg">
									BK
								</span>
							</a>
						</p>
					</div>
				<?php endif; ?>
			</div>

			<nav class="menu-mobile" >
				<div class="menu-mobile__wrap">
					<div class="row-main">
						<ul class="menu-mobile__list">
							<li class="menu-mobile__item">
								<a href="#" class="menu-mobile__link menu-mobile__link--search">
									<span class="icon icon-search"></span>
								</a>
							</li>
							<li class="menu-mobile__item">
								<a href="#" class="menu-mobile__link menu-mobile__link--lang">
									EN
								</a>
							</li>
							<li class="menu-mobile__item">
								<a href="#" class="menu-mobile__link menu-mobile__link--burger">
									<span class="menu-mobile__burger"><span></span></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>

	<nav id="menu-main" class="menu-primary ins-menu-primary" >
		<div class="menu-primary__holder">
			<div class="row-main">
				<div class="menu-primary__wrap">
					<?php if ($type2 !== true && $type3 !== true): ?>
					<ul class="menu-primary__list">
						<li class="menu-primary__item with-submenu">
							<span class="menu-primary__links">
								<a href="#" class="menu-primary__link is-active">
									<span class="menu-primary__inner">Chci studovat</span>
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="menu-primary__toggle icon icon-angle-down" aria-hidden="true"></a>
							</span>
							<div class="menu-submenu">
								<ul class="menu-submenu__list">
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Odkaz na root kategorii</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Submenu item 2</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link is-active">Submenu item 3</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Submenu item 4</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Submenu item 5</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Submenu item 6</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-primary__item menu-primary__item--dark with-submenu">
							<span class="menu-primary__links">
								<a href="#" class="menu-primary__link">
									<span class="menu-primary__inner">Výzkum</span>
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="menu-primary__toggle icon icon-angle-down" aria-hidden="true"></a>
							</span>
							<div class="menu-submenu">
								<ul class="menu-submenu__list">
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Odkaz na root kategorii</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Submenu item 2</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link is-active">Submenu item 3</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Submenu item 4</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Submenu item 5</a>
									</li>
									<li class="menu-submenu__item">
										<a href="#" class="menu-submenu__link">Submenu item 6</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-primary__item menu-primary__item--dark with-subbox">
							<span class="menu-primary__links">
								<a href="#" class="menu-primary__link">
									<span class="menu-primary__inner">Spolupráce</span>
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="menu-primary__toggle icon icon-angle-down" aria-hidden="true"></a>
							</span>
							<div class="menu-subbox">
								<a href="#" class="menu-subbox__close icon icon-chevron-left" aria-hidden="true"></a>
								<div class="grid grid--center">
									<div class="grid__cell size--m--1-3 size--l--2-12 menu-subbox__toggle">
										<p class="menu-subbox__title with-subitems">
											Item group
											<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
										</p>
										<div class="menu-subbox__box">
											<ul class="menu-subbox__list">
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item A</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item B</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item C</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item D</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 menu-subbox__toggle">
										<p class="menu-subbox__title with-subitems">
											<a href="#" class="menu-subbox__title__link">Item group</a>
											<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
										</p>
										<div class="menu-subbox__box">
											<ul class="menu-subbox__list">
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item A</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item B</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item C</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item D</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 menu-subbox__toggle">
										<p class="menu-subbox__title with-subitems">
											<a href="#" class="menu-subbox__title__link">Item group</a>
											<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
										</p>
										<div class="menu-subbox__box">
											<ul class="menu-subbox__list">
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item A</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item B</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item C</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item D</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="menu-primary__item menu-primary__item--dark with-subbox">
							<span class="menu-primary__links">
								<a href="#" class="menu-primary__link">
									<span class="menu-primary__inner">O Univerzitě</span>
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="menu-primary__toggle icon icon-angle-down" aria-hidden="true"></a>
							</span>
							<div class="menu-subbox">
								<a href="#" class="menu-subbox__close icon icon-chevron-left" aria-hidden="true"></a>
								<div class="grid">
									<div class="grid__cell size--m--1-3 size--l--2-12 menu-subbox__toggle">
										<p class="menu-subbox__title with-subitems">
											Item group
											<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
										</p>
										<div class="menu-subbox__box">
											<ul class="menu-subbox__list">
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item A</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item B</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item C</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item D</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 menu-subbox__toggle">
										<p class="menu-subbox__title with-subitems">
											<a href="#" class="menu-subbox__title__link">Item group</a>
											<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
										</p>
										<div class="menu-subbox__box">
											<ul class="menu-subbox__list">
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item A</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item B</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item C</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item D</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 menu-subbox__toggle">
										<p class="menu-subbox__title with-subitems">
											<a href="#" class="menu-subbox__title__link">Item group</a>
											<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
										</p>
										<div class="menu-subbox__box">
											<ul class="menu-subbox__list">
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item A</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item B</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item C</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item D</a>
												</li>
												<li class="menu-subbox__item">
													<a href="#" class="menu-subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--l--6-12">
										<p class="menu-subbox__title">
											Nadpis
										</p>
										<div class="menu-subbox__box">
											<div class="grid">
												<div class="grid__cell size--m--2-4 size--l--5-12">
													<table>
														<tr>
															<th>Pondělí</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Úterý</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Středa</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Čtvrtek</th>
															<td class="right">Není úředný den</td>
														</tr>
														<tr>
															<th>Pátek</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
													</table>
												</div>
												<div class="grid__cell size--m--2-4 size--l--7-12">
													<p>Mauris vulputate, mi vitae lobortis interdum, massa mi pulvinar velit, non sollicitudin magna erat ut erat. Duis arcu ante, dictum non.</p>
													<p>
														<a href="#" class="btn btn-s btn-white btn-border">
															<span>Button</span>
														</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="menu-primary__item with-subbox">
							<span class="menu-primary__links">
								<a href="#" class="menu-primary__link">
									<span class="menu-primary__inner">O MUNI</span>
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="menu-primary__toggle icon icon-angle-down" aria-hidden="true"></a>
							</span>
							<div class="menu-subbox">
								<a href="#" class="menu-subbox__close icon icon-chevron-left" aria-hidden="true"></a>
								<div class="ins-menu-mega">
									<p class="ins-menu-mega__head">
										<img src="../../img/illust/box-img.jpg" alt="" width="70" height="70"/>
									</p>
									<div class="ins-menu-mega__main">
										<div class="menu-subbox__toggle">
											<p class="menu-subbox__title with-subitems">
												<a href="#" class="menu-subbox__title__link">Moje pracoviště Recetox</a>
												<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
											</p>
											<div class="menu-subbox__box">
												<div class="grid">
													<div class="grid__cell size--m--1-4">
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Struktura</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Odborné akce</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Archiv aktualit</a>
															</li>
														</ul>
													</div>
													<div class="grid__cell size--m--1-4">
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Studium a vzdělání</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Kontakty</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Informační materiály</a>
															</li>
														</ul>
													</div>
													<div class="grid__cell size--m--1-4">
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Věda a výzkum</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Partněři</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">PO VVV</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ins-menu-mega">
									<p class="ins-menu-mega__head">
										<img src="../../img/illust/box-img-1.jpg" alt="" width="70" height="70"/>
									</p>
									<div class="ins-menu-mega__main">
										<div class="menu-subbox__toggle">
											<p class="menu-subbox__title with-subitems">
												<a href="#" class="menu-subbox__title__link">Moje fakulta informatiky</a>
												<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
											</p>
											<div class="menu-subbox__box">
												<div class="grid">
													<div class="grid__cell size--m--1-4">
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Kdo jsme</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Z historie</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Důležité dokumenty</a>
															</li>
														</ul>
													</div>
													<div class="grid__cell size--m--1-4">
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Lidé</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Síň slávy</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Galerie událostí</a>
															</li>
														</ul>
													</div>
													<div class="grid__cell size--m--1-4">
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Pracoviště</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Akce, konference</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Kontakty</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ins-menu-mega u-mb-0">
									<p class="ins-menu-mega__head">
										<img src="../../img/illust/box-img-2.jpg" alt="" width="70" height="70"/>
									</p>
									<div class="ins-menu-mega__main">
										<div class="menu-subbox__toggle">
											<p class="menu-subbox__title with-subitems">
												<a href="#" class="menu-subbox__title__link">Masarykova univerzita</a>
												<a href="#" class="menu-subbox__title__toggle icon icon-angle-down"></a>
											</p>
											<div class="menu-subbox__box">
												<div class="grid">
													<div class="grid__cell size--m--1-4">
														<p class="menu-subbox__subtitle">
															Fakta, analýzy, statistiky
														</p>
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Základní fakt a čísla</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Výroční zprávy</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Analýzy a statistiky</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Výsledky průzkumů</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">MEzinárodní žebříčky</a>
															</li>
														</ul>
													</div>
													<div class="grid__cell size--m--1-4">
														<p class="menu-subbox__subtitle">
															Lidé a pracoviště
														</p>
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Organizační struktura</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Orgány a komise</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Vyhledávání zaměstnanců</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Mapa</a>
															</li>
														</ul>
													</div>
													<div class="grid__cell size--m--1-4">
														<p class="menu-subbox__subtitle">
															Dokumenty
														</p>
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Dlouhodobý záměr a plán</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Statu univerzity</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Úřední deska</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Zápisy z jednání vedení, kolegií a senátu</a>
															</li>
														</ul>
													</div>
													<div class="grid__cell size--m--1-4">
														<p class="menu-subbox__subtitle">
															Marketing a prezentace univerzity
														</p>
														<ul class="menu-subbox__list">
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Kdo jsme</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Vizuální identita</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Marketingové aktivity a zdroje</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Reklamní předměty  a propagační tiskoviny</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Komunikace s novináři</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Sociální sítě</a>
															</li>
															<li class="menu-subbox__item">
																<a href="#" class="menu-subbox__link">Kontakty</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<?php if ($type1 === true): ?>
							<li class="menu-primary__item header__menu__primary__item">
								<a href="#" class="menu-primary__link">
									Další odkaz
								</a>
							</li>
							<li class="menu-primary__item header__menu__primary__item">
								<a href="#" class="menu-primary__link">
									Další odkaz
								</a>
							</li>
						<?php endif; ?>
					</ul>
				<?php endif; ?>

				<?php if ($type1 !== true): ?>
					<ul class="menu-header-secondary<?php if ($type3 === true): ?> menu-header-secondary--left<?php endif; ?>">
						<li class="menu-header-secondary__item">
							<a href="#" class="menu-header-secondary__link is-active">Studenti</a>
						</li>
						<li class="menu-header-secondary__item">
							<a href="#" class="menu-header-secondary__link">Absolventi</a>
						</li>
						<?php if ($type2 === true || $type3 === true): ?>
							<li class="menu-header-secondary__item">
								<a href="#" class="menu-header-secondary__link">Další odkaz</a>
							</li>
							<li class="menu-header-secondary__item">
								<a href="#" class="menu-header-secondary__link">Další odkaz</a>
							</li>
							<li class="menu-header-secondary__item">
								<a href="#" class="menu-header-secondary__link">Další odkaz</a>
							</li>
							<li class="menu-header-secondary__item">
								<a href="#" class="menu-header-secondary__link">Další odkaz</a>
							</li>
						<?php endif; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
		<a href="#" class="menu-primary__title">
			<span class="icon icon-bars"></span>
			&nbsp;
		</a>
		<div class="menu-primary__main-toggle" aria-hidden="true"></div>
		</div>
	</nav>

	<?php if ($profile !== true): ?>
		<div class="menu-secondary menu-secondary--white" >
			<div class="row-main">
				<div class="menu-secondary__wrap">
					<ul class="menu-secondary__list js-scroll-nav">
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link is-active">
								Úvod
								<span class="icon icon-angle-down"></span>
							</a>
							<div class="menu-secondary__submenu">
								<ul class="menu-secondary__submenu__list">
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 11</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 12</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 13</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 14</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 15</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">
								Proč MUNI
								<span class="icon icon-angle-down"></span>
							</a>
							<div class="menu-secondary__submenu">
								<ul class="menu-secondary__submenu__list">
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 21</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 22</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 23</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 24</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 25</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Nabídka oborů</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Přijímačky</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($profile == true): ?>
		<div class="menu-secondary menu-secondary--white" >
			<div class="row-main">
				<div class="menu-secondary__wrap">
					<ul class="menu-secondary__list js-scroll-nav">
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link with-icon">
								<span class="icon icon-home"></span>
								Zprávy
							</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link with-icon">
								<span class="icon icon-home"></span>
								Moje rychlé odkazy
							</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link with-icon">
								<span class="icon icon-home"></span>
								Kalendář
							</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link with-icon">
								<span class="icon icon-home"></span>
								Dokumenty
							</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link with-icon">
								<span class="icon icon-home"></span>
								Denní menu
							</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link with-icon with-dropdown">
								<span class="icon icon-home"></span>
								Více aplikací
								<span class="icon icon-angle-down"></span>
							</a>
							<div class="menu-secondary__submenu">
								<ul class="menu-secondary__submenu__list">
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link with-icon">
											<span class="icon icon-home"></span>
											Submenu item 11
										</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 12</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 13</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 14</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 15</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if (isset($menuSecondary)): ?>
		<?php if (($menuSecondary === true) or ($menuSecondary == 'type1')): ?>
		<div class="menu-secondary menu-secondary--white" >
			<div class="row-main">
				<div class="menu-secondary__wrap">
					<ul class="menu-secondary__list js-scroll-nav">
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 1</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 2</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link is-active">Menu item 3</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 4</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 5</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 6</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 7</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 8</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 9</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if (($menuSecondary === true) or ($menuSecondary == 'type2')): ?>
		<div class="menu-secondary menu-secondary--white" >
			<div class="row-main">
				<div class="menu-secondary__wrap">
					<ul class="menu-secondary__list js-scroll-nav">
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link with-icon">
								<span class="icon icon-home"></span>
								Menu item 1
							</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link is-active with-icon">
								<span class="icon icon-calendar"></span>
								Menu item 2
							</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link with-icon">
								<span class="icon icon-comment"></span>
								Menu item 3
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if (($menuSecondary === true) or ($menuSecondary == 'type3')): ?>
		<div class="menu-secondary menu-secondary--right menu-secondary--white" >
			<div class="row-main">
				<div class="menu-secondary__wrap">
					<ul class="menu-secondary__list js-scroll-nav">
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 1</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 2</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link is-active">Menu item 3</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if (($menuSecondary === true) or ($menuSecondary == 'type4')): ?>
		<div class="menu-secondary menu-secondary--center menu-secondary--white" >
			<div class="row-main">
				<div class="menu-secondary__wrap">
					<ul class="menu-secondary__list js-scroll-nav">
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 1</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 2</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link is-active">Menu item 3</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if (($menuSecondary === true) or ($menuSecondary == 'type5')): ?>
		<div class="row-main" style="margin: 60px auto -30px;">
			<div class="sk-annot">
				<h2 class="sk-annot__title">S dropdown submenu</h2>
			</div>
		</div>
		<div class="menu-secondary menu-secondary--white" >
			<div class="row-main">
				<div class="menu-secondary__wrap">
					<ul class="menu-secondary__list js-scroll-nav">
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 1</a>
							<div class="menu-secondary__submenu">
								<ul class="menu-secondary__submenu__list">
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 11</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 12</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 13</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 14</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 15</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 2</a>
							<div class="menu-secondary__submenu">
								<ul class="menu-secondary__submenu__list">
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 21</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 22</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 23</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 24</a>
									</li>
									<li class="menu-secondary__submenu__item">
										<a href="#" class="menu-secondary__submenu__link">Submenu item 25</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 3</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 4</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 5</a>
						</li>
						<li class="menu-secondary__item">
							<a href="#" class="menu-secondary__link">Menu item 6</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php endif; ?>
	<?php endif; ?>
</header>

<?php if ($fixedHeader): ?>
	</div>
<?php endif; ?>
