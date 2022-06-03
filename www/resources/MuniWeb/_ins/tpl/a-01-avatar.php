<?php
	$title = 'Avatar';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>01</strong>
						Avatar
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/atoms/_avatar.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Atom avatara používající se v hlavičce. Avatar může a nemusí být odkazem. Fotka v avataru by měla mít rozměry 40x40px. Používá se pro něj div.ins-avatar.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="ins-avatar">
							<a href="#" class="ins-avatar__link">
								<img src="../../img/illust/avatar.jpg" alt="" width="40" height="40"/>
								<span class="ins-avatar__noimg">
									BK
								</span>
							</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Bez obrázku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pokud není použit žádný obrázek, je potřeba mít v kódu span s třídou "ins-avatar__noimg", do níž se vkládájí iniciály uživatele. V tom případě se zobrazí bílý text na modrém pozadí.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="ins-avatar">
							<a href="#" class="ins-avatar__link">
								<span class="ins-avatar__noimg">
									BK
								</span>
							</a>
						</p>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
