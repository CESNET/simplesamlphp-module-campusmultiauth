<?php
	$title = 'Souhrn';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>05</strong>
						Summary
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/molecules/box/_summary.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Jedná se o výchozí molekulu pro zobrazení profilového shrnutí. Slouží pro ně div.ins-box-summary, které se libovolně vkládají dle potřeb do gridu.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--m--4-12">
								<div class="ins-box-summary">
									<p class="ins-box-summary__count">
										5
										<span class="icon icon-envelope"></span>
									</p>
									<p class="ins-box-summary__title">Nepřečtené zprávy v poště</p>
								</div>
							</div>

							<div class="grid__cell size--m--4-12">
								<div class="ins-box-summary">
									<p class="ins-box-summary__count">
										14
										<span class="icon icon-calendar-check"></span>
									</p>
									<p class="ins-box-summary__title">Událostí ke schválení</p>
								</div>
							</div>

							<div class="grid__cell size--m--4-12">
								<div class="ins-box-summary">
									<p class="ins-box-summary__count">
										6
										<span class="icon icon-bell"></span>
									</p>
									<p class="ins-box-summary__title">Upozornění</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Červená</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Jedná se o modifikaci výchozí molekuly, přidáváme třídu .ins-box-summary--red.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--m--4-12">
								<div class="ins-box-summary ins-box-summary--red">
									<p class="ins-box-summary__count">
										5
										<span class="icon icon-envelope"></span>
									</p>
									<p class="ins-box-summary__title">Nepřečtené zprávy v poště</p>
								</div>
							</div>

							<div class="grid__cell size--m--4-12">
								<div class="ins-box-summary ins-box-summary--red">
									<p class="ins-box-summary__count">
										14
										<span class="icon icon-calendar-check"></span>
									</p>
									<p class="ins-box-summary__title">Událostí ke schválení</p>
								</div>
							</div>

							<div class="grid__cell size--m--4-12">
								<div class="ins-box-summary ins-box-summary--red">
									<p class="ins-box-summary__count">
										6
										<span class="icon icon-bell"></span>
									</p>
									<p class="ins-box-summary__title">Upozornění</p>
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
