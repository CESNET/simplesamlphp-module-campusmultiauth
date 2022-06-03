<?php
	$title = 'Notifikace';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>01</strong>
						Notifikace
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_notifications.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pokud chceme přidat rozkliávání pomocí JS, je potřeba na .ins-box-notifications__label přidat DATA atribut data-notifications.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="ins-box-notifications" >
							<div class="ins-box-notifications__head">
								<div class="ins-box-notifications__label ins-box-notifications__label--full">
									5
									<span class="icon icon-envelope"></span>
								</div>
							</div>

							<div class="ins-box-notifications__head ins-box-notifications__head--divided">
								<div class="ins-box-notifications__label ins-box-notifications__label--left ins-box-notifications__label--warning">2</div>
								<div class="ins-box-notifications__label ins-box-notifications__label--right ins-box-notifications__label--dropdown" data-notifications>
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
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
