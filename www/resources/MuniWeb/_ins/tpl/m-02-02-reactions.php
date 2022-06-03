<?php
	$title = 'Výpis reakcí';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>11</strong>
						Výpis reakcí
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/crossroad/_reactions.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro vypsání seznamu reakcí. Slouží pro něj molekula .ins-crossroad-reactions.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="ins-crossroad-reactions">
							<div class="ins-crossroad-reactions__item">
								<div class="ins-crossroad-reactions__avatar">
									<img src="../img/illust/avatar.jpg" width="32" height="32" alt="">
								</div>

								<p class="ins-crossroad-reactions__name">
									<a href="#">Jan Šplíchal</a>
									<span class="ins-crossroad-reactions__meta">9. května 2018 11:22</span>
								</p>

								<div class="ins-crossroad-reactions__content">
									<p>
										Ehm... Z Přírodovědecké a PEDAGOGICKÉ fakulty ;-)
									</p>
								</div>
							</div>

							<div class="ins-crossroad-reactions__item">
								<div class="ins-crossroad-reactions__avatar">
									<img src="../img/illust/avatar.jpg" width="32" height="32" alt="">
								</div>

								<p class="ins-crossroad-reactions__name">
									<a href="#">David Pokorný</a> v odpovědi pro <a href="#">Jan Šplíchal</a>
									<span class="ins-crossroad-reactions__meta">8. května 2018 11:35</span>
								</p>

								<div class="ins-crossroad-reactions__content">
									<p>
										Aj, pardon.
									</p>
								</div>
							</div>

							<div class="ins-crossroad-reactions__item">
								<div class="ins-crossroad-reactions__avatar">
									<img src="../img/illust/avatar.jpg" width="32" height="32" alt="">
								</div>

								<div class="ins-crossroad-reactions__content">
									<div class="ins-crossroad-reactions__inp">
										<label for="chat-message" class="vhide">Reagovat</label>
										<span class="inp-fix inp-icon inp-icon--after">
											<textarea name="chat-message" id="chat-message" cols="30" rows="1" class="inp-text inp-text--small" placeholder="Reagovat"></textarea>
											<a href="#" class="btn-icon icon icon-link" title="Přidat přílohu">
												<span class="vhide">Přidat přílohu</span>
											</a>
										</span>
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
