<?php
	$title = 'Profilové menu';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>01</strong>
						Profilové menu
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/menu/_profile.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro profilové menu v hlavičce. Pro tuto molekulu slouží div.ins-menu-profile.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
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
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
