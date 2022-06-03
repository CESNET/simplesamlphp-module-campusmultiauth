<?php
	$title = 'Seznam';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>02</strong>
						Seznam
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/atoms/_list-blank.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Speciální seznam. Jsou zde vyresetovány klasické vlastnosti seznamu pomocí @extend %reset-ul. Velikost textů nastavená na 14px. Tento seznam se využívá pro výpisy na Portálu, například v <a href="/_ins/tpl/m-01-05-food-menu.html"> molekule jídelníčku</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<ul class="list-blank">
							<li>
								<a href="#" class="text-icon">
									<span class="text-icon__icon text-icon__icon--bg bg-blue-dark">
										<span class="icon icon-filter"></span>
									</span>
									<span class="text-icon__label">Yammer MUNI</span>
								</a>
							</li>
							<li>
								<a href="#" class="text-icon">
									<span class="text-icon__icon text-icon__icon--bg">M</span>
									<span class="text-icon__label">MUNI kalendář</span>
								</a>
							</li>
							<li>
								<a href="#" class="text-icon">
									<span class="text-icon__icon text-icon__icon--bg">ZP</span>
									<span class="text-icon__label">Zpravodajský portál Masarykovy univerzity</span>
								</a>
							</li>
							<li>
								<a href="#" class="text-icon">
									<span class="text-icon__icon text-icon__icon--bg bg-phil">
										<span class="icon icon-table"></span>
									</span>
									<span class="text-icon__label">Úřední deska</span>
								</a>
							</li>
							<li>
								<a href="#" class="text-icon">
									<span class="text-icon__icon text-icon__icon--bg bg-corn">NO</span>
									<span class="text-icon__label">Nově vypsané granty</span> <small>K dispozici jsou 3 nové granty</small>
								</a>
							</li>
							<li>
								<a href="#" class="text-icon">
									<span class="text-icon__icon text-icon__icon--bg bg-trinidad">GD</span>
									<span class="text-icon__label">GDPR guidelines</span>
								</a>
							</li>
							<li>
								<a href="#" class="text-icon">
									<span class="text-icon__icon text-icon__icon--bg bg-violet">NO</span>
									<span class="text-icon__label">Nové publikace</span> <small>Celkem 12 nových publikací</small>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</main>

<?php
	include 'part/footer.php';
?>
