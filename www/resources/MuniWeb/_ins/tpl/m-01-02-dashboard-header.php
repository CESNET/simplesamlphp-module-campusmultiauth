<?php
	$title = 'Hlavička dashboardu';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>04</strong>
						Dashboard header
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_dashboard-header.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazení informací v hlavičce dashboardu. Používáme pro ni div.ins-dashobard-header.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="ins-box-dashboard-header">
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
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
