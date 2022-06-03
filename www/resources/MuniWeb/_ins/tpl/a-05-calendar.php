<?php
	$title = 'Kalendář';
	$profile = true;
	$notifications = true;
	include 'part/header.php';
?>

		<main id="main" class="main" >
			<div class="row-main">
				<div class="sk-annot--main">
					<h1 class="font-muni">
						<strong>05</strong>
						Kalendář + plugin RBC kalendář
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/_ins/css/atoms/_calendar.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Atom kalendáře se používá uvnitř molekuly <a href="/_ins/tpl/m-01-04-widget.html">Widget</a>. Funkcionalitu nám zajišťuje vybraný externí plugin React Big Calendar, který je zdokumentován <a href="https://github.com/intljusticemission/react-big-calendar" target="_blank">zde</a>.
						</p>
						<p>
							Pro kalendář nám slouží div.ins-calendar.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<style>
							.rbc-btn {
								color: inherit;
								font: inherit;
								margin: 0;
							}

							button.rbc-btn {
								overflow: visible;
								text-transform: none;
								-webkit-appearance: button;
								cursor: pointer;
							}

							button[disabled].rbc-btn {
								cursor: not-allowed;
							}

							button.rbc-input::-moz-focus-inner {
								border: 0;
								padding: 0;
							}

							.rbc-calendar {
								-webkit-box-sizing: border-box;
								box-sizing: border-box;
								height: 100%;
								display: -ms-flexbox;
								display: flex;
								-ms-flex-direction: column;
								flex-direction: column;
								-ms-flex-align: stretch;
								align-items: stretch;
							}

							.rbc-calendar *,
							.rbc-calendar *:before,
							.rbc-calendar *:after {
								-webkit-box-sizing: inherit;
								box-sizing: inherit;
							}

							.rbc-abs-full,
							.rbc-row-bg {
								overflow: hidden;
								position: absolute;
								top: 0;
								left: 0;
								right: 0;
								bottom: 0;
							}

							.rbc-ellipsis,
							.rbc-event-label,
							.rbc-row-segment .rbc-event-content,
							.rbc-show-more {
								display: block;
								overflow: hidden;
								text-overflow: ellipsis;
								white-space: nowrap;
							}

							.rbc-rtl {
								direction: rtl;
							}

							.rbc-off-range {
								color: #999999;
							}

							.rbc-off-range-bg {
								background: #e5e5e5;
							}

							.rbc-header {
								overflow: hidden;
								-ms-flex: 1 0;
								flex: 1 0;
								text-overflow: ellipsis;
								white-space: nowrap;
								padding: 0 3px;
								text-align: center;
								vertical-align: middle;
								font-weight: bold;
								font-size: 90%;
								min-height: 0;
								border-bottom: 1px solid #DDD;
							}

							.rbc-header+.rbc-header {
								border-left: 1px solid #DDD;
							}

							.rbc-rtl .rbc-header+.rbc-header {
								border-left-width: 0;
								border-right: 1px solid #DDD;
							}

							.rbc-header>a,
							.rbc-header>a:active,
							.rbc-header>a:visited {
								color: inherit;
								text-decoration: none;
							}

							.rbc-row-content {
								position: relative;
								-moz-user-select: none;
								-ms-user-select: none;
								user-select: none;
								-webkit-user-select: none;
								z-index: 4;
							}

							.rbc-today {
								background-color: #eaf6ff;
							}

							.rbc-toolbar {
								display: -ms-flexbox;
								display: flex;
								-ms-flex-wrap: wrap;
								flex-wrap: wrap;
								-ms-flex-pack: center;
								justify-content: center;
								-ms-flex-align: center;
								align-items: center;
								margin-bottom: 10px;
								font-size: 16px;
							}

							.rbc-toolbar .rbc-toolbar-label {
								-ms-flex-positive: 1;
								flex-grow: 1;
								padding: 0 10px;
								text-align: center;
							}

							.rbc-toolbar button {
								color: #373a3c;
								display: inline-block;
								margin: 0;
								text-align: center;
								vertical-align: middle;
								background: none;
								background-image: none;
								border: 1px solid #ccc;
								padding: .375rem 1rem;
								border-radius: 4px;
								line-height: normal;
								white-space: nowrap;
							}

							.rbc-toolbar button:active,
							.rbc-toolbar button.rbc-active {
								background-image: none;
								-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
								box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
								background-color: #e6e6e6;
								border-color: #adadad;
							}

							.rbc-toolbar button:active:hover,
							.rbc-toolbar button.rbc-active:hover,
							.rbc-toolbar button:active:focus,
							.rbc-toolbar button.rbc-active:focus {
								color: #373a3c;
								background-color: #d4d4d4;
								border-color: #8c8c8c;
							}

							.rbc-toolbar button:focus {
								color: #373a3c;
								background-color: #e6e6e6;
								border-color: #adadad;
							}

							.rbc-toolbar button:hover {
								color: #373a3c;
								background-color: #e6e6e6;
								border-color: #adadad;
							}

							.rbc-btn-group {
								display: inline-block;
								white-space: nowrap;
							}

							.rbc-btn-group>button:first-child:not(:last-child) {
								border-top-right-radius: 0;
								border-bottom-right-radius: 0;
							}

							.rbc-btn-group>button:last-child:not(:first-child) {
								border-top-left-radius: 0;
								border-bottom-left-radius: 0;
							}

							.rbc-rtl .rbc-btn-group>button:first-child:not(:last-child) {
								border-radius: 4px;
								border-top-left-radius: 0;
								border-bottom-left-radius: 0;
							}

							.rbc-rtl .rbc-btn-group>button:last-child:not(:first-child) {
								border-radius: 4px;
								border-top-right-radius: 0;
								border-bottom-right-radius: 0;
							}

							.rbc-btn-group>button:not(:first-child):not(:last-child) {
								border-radius: 0;
							}

							.rbc-btn-group button+button {
								margin-left: -1px;
							}

							.rbc-rtl .rbc-btn-group button+button {
								margin-left: 0;
								margin-right: -1px;
							}

							.rbc-btn-group+.rbc-btn-group,
							.rbc-btn-group+button {
								margin-left: 10px;
							}

							.rbc-event {
								border: none;
								-webkit-box-shadow: none;
								box-shadow: none;
								margin: 0;
								padding: 2px 5px;
								background-color: #3174ad;
								border-radius: 5px;
								color: #fff;
								cursor: pointer;
								width: 100%;
								text-align: left;
							}

							.rbc-slot-selecting .rbc-event {
								cursor: inherit;
								pointer-events: none;
							}

							.rbc-event.rbc-selected {
								background-color: #265985;
							}

							.rbc-event:focus {
								outline: 5px auto #3b99fc;
							}

							.rbc-event-label {
								font-size: 80%;
							}

							.rbc-event-overlaps {
								-webkit-box-shadow: -1px 1px 5px 0px rgba(51, 51, 51, 0.5);
								box-shadow: -1px 1px 5px 0px rgba(51, 51, 51, 0.5);
							}

							.rbc-event-continues-prior {
								border-top-left-radius: 0;
								border-bottom-left-radius: 0;
							}

							.rbc-event-continues-after {
								border-top-right-radius: 0;
								border-bottom-right-radius: 0;
							}

							.rbc-event-continues-earlier {
								border-top-left-radius: 0;
								border-top-right-radius: 0;
							}

							.rbc-event-continues-later {
								border-bottom-left-radius: 0;
								border-bottom-right-radius: 0;
							}

							.rbc-row {
								display: -ms-flexbox;
								display: flex;
								-ms-flex-direction: row;
								flex-direction: row;
							}

							.rbc-row-segment {
								padding: 0 1px 1px 1px;
							}

							.rbc-selected-cell {
								background-color: rgba(0, 0, 0, 0.1);
							}

							.rbc-show-more {
								background-color: rgba(255, 255, 255, 0.3);
								z-index: 4;
								font-weight: bold;
								font-size: 85%;
								height: auto;
								line-height: normal;
								white-space: nowrap;
							}

							.rbc-month-view {
								position: relative;
								border: 1px solid #DDD;
								display: -ms-flexbox;
								display: flex;
								-ms-flex-direction: column;
								flex-direction: column;
								-ms-flex: 1 0;
								flex: 1 0;
								width: 100%;
								-moz-user-select: none;
								-ms-user-select: none;
								user-select: none;
								-webkit-user-select: none;
								height: 100%;
							}

							.rbc-month-header {
								display: -ms-flexbox;
								display: flex;
								-ms-flex-direction: row;
								flex-direction: row;
							}

							.rbc-month-row {
								display: -ms-flexbox;
								display: flex;
								position: relative;
								-ms-flex-direction: column;
								flex-direction: column;
								-ms-flex: 1 0;
								flex: 1 0;
								-ms-flex-preferred-size: 0px;
								flex-basis: 0px;
								overflow: hidden;
								height: 100%;
							}

							.rbc-month-row+.rbc-month-row {
								border-top: 1px solid #DDD;
							}

							.rbc-date-cell {
								-ms-flex: 1 1;
								flex: 1 1;
								min-width: 0;
								padding-right: 5px;
								text-align: right;
							}

							.rbc-date-cell.rbc-now {
								font-weight: bold;
							}

							.rbc-date-cell>a,
							.rbc-date-cell>a:active,
							.rbc-date-cell>a:visited {
								color: inherit;
								text-decoration: none;
							}

							.rbc-row-bg {
								display: -ms-flexbox;
								display: flex;
								-ms-flex-direction: row;
								flex-direction: row;
								-ms-flex: 1 0;
								flex: 1 0;
								overflow: hidden;
							}

							.rbc-day-bg {
								-ms-flex: 1 0;
								flex: 1 0;
							}

							.rbc-day-bg+.rbc-day-bg {
								border-left: 1px solid #DDD;
							}

							.rbc-rtl .rbc-day-bg+.rbc-day-bg {
								border-left-width: 0;
								border-right: 1px solid #DDD;
							}

							.rbc-overlay {
								position: absolute;
								z-index: 5;
								border: 1px solid #e5e5e5;
								background-color: #fff;
								-webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
								box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
								padding: 10px;
							}

							.rbc-overlay>*+* {
								margin-top: 1px;
							}

							.rbc-overlay-header {
								border-bottom: 1px solid #e5e5e5;
								margin: -10px -10px 5px -10px;
								padding: 2px 10px;
							}

							.rbc-agenda-view {
								display: -ms-flexbox;
								display: flex;
								-ms-flex-direction: column;
								flex-direction: column;
								-ms-flex: 1 0;
								flex: 1 0;
								overflow: auto;
							}

							.rbc-agenda-view table.rbc-agenda-table {
								width: 100%;
								border: 1px solid #DDD;
								border-spacing: 0;
								border-collapse: collapse;
							}

							.rbc-agenda-view table.rbc-agenda-table tbody>tr>td {
								padding: 5px 10px;
								vertical-align: top;
							}

							.rbc-agenda-view table.rbc-agenda-table .rbc-agenda-time-cell {
								padding-left: 15px;
								padding-right: 15px;
								text-transform: lowercase;
							}

							.rbc-agenda-view table.rbc-agenda-table tbody>tr>td+td {
								border-left: 1px solid #DDD;
							}

							.rbc-rtl .rbc-agenda-view table.rbc-agenda-table tbody>tr>td+td {
								border-left-width: 0;
								border-right: 1px solid #DDD;
							}

							.rbc-agenda-view table.rbc-agenda-table tbody>tr+tr {
								border-top: 1px solid #DDD;
							}

							.rbc-agenda-view table.rbc-agenda-table thead>tr>th {
								padding: 3px 5px;
								text-align: left;
								border-bottom: 1px solid #DDD;
							}

							.rbc-rtl .rbc-agenda-view table.rbc-agenda-table thead>tr>th {
								text-align: right;
							}

							.rbc-agenda-time-cell {
								text-transform: lowercase;
							}

							.rbc-agenda-time-cell .rbc-continues-after:after {
								content: ' »';
							}

							.rbc-agenda-time-cell .rbc-continues-prior:before {
								content: '« ';
							}

							.rbc-agenda-date-cell,
							.rbc-agenda-time-cell {
								white-space: nowrap;
							}

							.rbc-agenda-event-cell {
								width: 100%;
							}

							.rbc-time-column {
								display: -ms-flexbox;
								display: flex;
								-ms-flex-direction: column;
								flex-direction: column;
								min-height: 100%;
							}

							.rbc-time-column .rbc-timeslot-group {
								-ms-flex: 1 1;
								flex: 1 1;
							}

							.rbc-timeslot-group {
								border-bottom: 1px solid #DDD;
								min-height: 40px;
								display: -ms-flexbox;
								display: flex;
								-ms-flex-flow: column nowrap;
								flex-flow: column nowrap;
							}

							.rbc-time-gutter,
							.rbc-header-gutter {
								-ms-flex: none;
								flex: none;
							}

							.rbc-label {
								padding: 0 5px;
							}

							.rbc-day-slot {
								position: relative;
							}

							.rbc-day-slot .rbc-events-container {
								bottom: 0;
								left: 0;
								position: absolute;
								right: 0;
								margin-right: 10px;
								top: 0;
							}

							.rbc-day-slot .rbc-events-container.rbc-is-rtl {
								left: 10px;
								right: 0;
							}

							.rbc-day-slot .rbc-event {
								border: 1px solid #265985;
								display: -ms-flexbox;
								display: flex;
								max-height: 100%;
								min-height: 20px;
								-ms-flex-flow: column wrap;
								flex-flow: column wrap;
								-ms-flex-align: start;
								align-items: flex-start;
								overflow: hidden;
								position: absolute;
							}

							.rbc-day-slot .rbc-event-label {
								-ms-flex: none;
								flex: none;
								padding-right: 5px;
								width: auto;
							}

							.rbc-day-slot .rbc-event-content {
								width: 100%;
								-ms-flex: 1 1;
								flex: 1 1;
								word-wrap: break-word;
								line-height: 1;
								height: 100%;
								min-height: 1em;
							}

							.rbc-day-slot .rbc-time-slot {
								border-top: 1px solid #f7f7f7;
							}

							.rbc-time-view-resources .rbc-time-gutter,
							.rbc-time-view-resources .rbc-time-header-gutter {
								position: -webkit-sticky;
								position: sticky;
								left: 0;
								background-color: white;
								border-right: 1px solid #DDD;
								z-index: 10;
								margin-right: -1px;
							}

							.rbc-time-view-resources .rbc-time-header {
								overflow: hidden;
							}

							.rbc-time-view-resources .rbc-time-header-content {
								min-width: auto;
								-ms-flex: 1 0;
								flex: 1 0;
								-ms-flex-preferred-size: 0px;
								flex-basis: 0px;
							}

							.rbc-time-view-resources .rbc-day-slot {
								min-width: 140px;
							}

							.rbc-time-view-resources .rbc-header,
							.rbc-time-view-resources .rbc-day-bg {
								width: 140px;
								-ms-flex: 1 1;
								flex: 1 1;
								-ms-flex-preferred-size: 0 px;
								flex-basis: 0 px;
							}

							.rbc-time-header-content+.rbc-time-header-content {
								margin-left: -1px;
							}

							.rbc-time-slot {
								-ms-flex: 1 0;
								flex: 1 0;
							}

							.rbc-time-slot.rbc-now {
								font-weight: bold;
							}

							.rbc-day-header {
								text-align: center;
							}

							.rbc-slot-selection {
								z-index: 10;
								position: absolute;
								background-color: rgba(0, 0, 0, 0.5);
								color: white;
								font-size: 75%;
								width: 100%;
								padding: 3px;
							}

							.rbc-slot-selecting {
								cursor: move;
							}

							.rbc-time-view {
								display: -ms-flexbox;
								display: flex;
								-ms-flex-direction: column;
								flex-direction: column;
								-ms-flex: 1 1;
								flex: 1 1;
								width: 100%;
								border: 1px solid #DDD;
								min-height: 0;
							}

							.rbc-time-view .rbc-time-gutter {
								white-space: nowrap;
							}

							.rbc-time-view .rbc-allday-cell {
								-webkit-box-sizing: content-box;
								box-sizing: content-box;
								width: 100%;
								height: 100%;
								position: relative;
							}

							.rbc-time-view .rbc-allday-cell+.rbc-allday-cell {
								border-left: 1px solid #DDD;
							}

							.rbc-time-view .rbc-allday-events {
								position: relative;
								z-index: 4;
							}

							.rbc-time-view .rbc-row {
								-webkit-box-sizing: border-box;
								box-sizing: border-box;
								min-height: 20px;
							}

							.rbc-time-header {
								display: -ms-flexbox;
								display: flex;
								-ms-flex: 0 0 auto;
								flex: 0 0 auto;
								-ms-flex-direction: row;
								flex-direction: row;
							}

							.rbc-time-header.rbc-overflowing {
								border-right: 1px solid #DDD;
							}

							.rbc-rtl .rbc-time-header.rbc-overflowing {
								border-right-width: 0;
								border-left: 1px solid #DDD;
							}

							.rbc-time-header>.rbc-row:first-child {
								border-bottom: 1px solid #DDD;
							}

							.rbc-time-header>.rbc-row.rbc-row-resource {
								border-bottom: 1px solid #DDD;
							}

							.rbc-time-header-content {
								-ms-flex: 1 1;
								flex: 1 1;
								display: -ms-flexbox;
								display: flex;
								min-width: 0;
								-ms-flex-direction: column;
								flex-direction: column;
								border-left: 1px solid #DDD;
							}

							.rbc-rtl .rbc-time-header-content {
								border-left-width: 0;
								border-right: 1px solid #DDD;
							}

							.rbc-time-content {
								display: -ms-flexbox;
								display: flex;
								-ms-flex: 1 0;
								flex: 1 0;
								-ms-flex-align: start;
								align-items: flex-start;
								width: 100%;
								border-top: 2px solid #DDD;
								overflow-y: auto;
								position: relative;
							}

							.rbc-time-content>.rbc-time-gutter {
								-ms-flex: none;
								flex: none;
							}

							.rbc-time-content>*+*>* {
								border-left: 1px solid #DDD;
							}

							.rbc-rtl .rbc-time-content>*+*>* {
								border-left-width: 0;
								border-right: 1px solid #DDD;
							}

							.rbc-time-content>.rbc-day-slot {
								width: 100%;
								-moz-user-select: none;
								-ms-user-select: none;
								user-select: none;
								-webkit-user-select: none;
							}

							.rbc-current-time-indicator {
								position: absolute;
								z-index: 3;
								left: 0;
								right: 0;
								height: 1px;
								background-color: #74ad31;
								pointer-events: none;
							}
						</style>

						<main id="main" class="main" >
							<div class="row-main">
								<div class="ins-box-dashboard-header">
									<div class="ins-box-dashboard-header__heading">
										<h1 class="ins-box-dashboard-header__title h0 primary">Kalendář</h1>

										<p class="ins-box-dashboard-header__actions">
											<a href="#" class="ins-box-dashboard-header__action ins-box-dashboard-header__action--arrow ins-box-dashboard-header__action--tdn">
												<strong>5</strong>
												<span class="icon icon-bookmark"></span>
											</a>
											<a href="#" class="ins-box-dashboard-header__action">
												<span class="vhide">Nastavení</span>
												<span class="icon icon-cog"></span>
											</a>
										</p>
									</div>
								</div>

								<div class="ins-box-widget">
									<div class="ins-box-widget__header">
										<h2 class="ins-box-widget__title">
											<span class="icon icon-calendar-alt"></span>
											Kalendář
										</h2>

										<div class="ins-box-widget__actions">
											<div class="ins-dropdown">
												<a href="#" class="ins-box-widget__action" data-dropdown>
													Filtrovat
													<span class="icon icon-filter"></span>
												</a>

												<div class="ins-dropdown__menu">
													<div class="inp-items inp-items--dropdown">
														<ul class="inp-items__list">
															<li class="inp-items__item">
																<label class="inp-item inp-item--checkbox">
																	<input type="checkbox" checked>
																	<span>Yammer</span>
																</label>
															</li>
															<li class="inp-items__item">
																<label class="inp-item inp-item--checkbox">
																	<input type="checkbox" checked>
																	<span>Stránky online.muni.cz</span>
																</label>
															</li>
															<li class="inp-items__item">
																<label class="inp-item inp-item--checkbox">
																	<input type="checkbox">
																	<span>Pozvánky na fakultní a univerzitní akce</span>
																</label>
															</li>
															<li class="inp-items__item">
																<label class="inp-item inp-item--checkbox">
																	<input type="checkbox">
																	<span>Další specifikovaný zdroj</span>
																</label>
															</li>
														</ul>
													</div>

													<hr class="ins-dropdown__divider">

													<div class="inp-items inp-items--dropdown">
														<ul class="inp-items__list">
															<li class="inp-items__item">
																<label class="inp-item inp-item--checkbox">
																	<input type="checkbox">
																	<span>Zobrazit skryté příspěvky</span>
																</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="ins-box-widget__body">
										<div class="ins-calendar">
											<div class="rbc-calendar">
												<div class="rbc-toolbar"><span class="rbc-btn-group"><button type="button">Dnes</button><button type="button">Předchozí</button><button
														type="button">Další</button></span><span class="rbc-toolbar-label"><strong>Září</strong> 26. 9. 9. – 15. 9 2018</span><span class="rbc-btn-group"><button
														type="button" class="">Agenda</button><button type="button" class="rbc-active">Týden</button><button type="button" class="">Měsíc</button><button type="button" class="">Rok</button></span></div>
												<div class="rbc-time-view">
													<div class="rbc-time-header rbc-overflowing">
														<div class="rbc-label rbc-time-header-gutter" style="width: 87.05px; min-width: 87.05px; max-width: 87.05px;">Den</div>
														<div class="rbc-time-header-content">
															<div class="rbc-row rbc-time-header-cell">
																<div class="rbc-header"><a href="#"><span>Pondělí <strong>09</strong></span></a></div>
																<div class="rbc-header"><a href="#"><span>Úterý <strong>10</strong></span></a></div>
																<div class="rbc-header"><a href="#"><span>Středa <strong>11</strong></span></a></div>
																<div class="rbc-header"><a href="#"><span>Čtvrtek <strong>12</strong></span></a></div>
																<div class="rbc-header"><a href="#"><span>Pátek <strong>13</strong></span></a></div>
																<div class="rbc-header"><a href="#"><span>Sobota <strong>14</strong></span></a></div>
																<div class="rbc-header"><a href="#"><span>Neděle <strong>15</strong></span></a></div>
															</div>
															<div class="rbc-allday-cell">
																<div class="rbc-row-bg">
																	<div class="rbc-day-bg"></div>
																	<div class="rbc-day-bg"></div>
																	<div class="rbc-day-bg"></div>
																	<div class="rbc-day-bg"></div>
																	<div class="rbc-day-bg"></div>
																	<div class="rbc-day-bg"></div>
																	<div class="rbc-day-bg"></div>
																</div>
																<div class="rbc-row-content">
																	<div class="rbc-row">
																		<div class="rbc-row-segment" style="flex-basis: 14.2857%; max-width: 14.2857%;"><button class="rbc-event rbc-event-allday rbc-event-continues-prior">
																				<div class="rbc-event-content" title="Conference">Conference</div>
																			</button></div>
																	</div>
																	<div class="rbc-row"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="rbc-time-content">
														<div class="rbc-time-gutter rbc-time-column">
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">07</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">08</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">09</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">10</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">11</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">12</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">13</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">14</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">15</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">16</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">17</span></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"><span class="rbc-label">18</span></div>
																<div class="rbc-time-slot"></div>
															</div>
														</div>
														<div class="rbc-day-slot rbc-time-column">
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-events-container">
																<div title="10:30 AM — 12:30 PM: Meeting" class="rbc-event" style="top: 45.6522%; height: 8.69565%; left: 0%; width: 85%;">
																	<div class="rbc-event-label">10:30 AM — 12:30 PM</div>
																	<div class="rbc-event-content">Meeting</div>
																</div>
																<div title="2:00 PM — 3:00 PM: Meeting" class="rbc-event" style="top: 60.8696%; height: 4.34783%; left: 0%; width: 100%;">
																	<div class="rbc-event-label">2:00 PM — 3:00 PM</div>
																	<div class="rbc-event-content">Meeting</div>
																</div>
																<div title="12:00 PM — 1:00 PM: Lunch" class="rbc-event" style="top: 52.1739%; height: 4.34783%; left: 50%; width: 50%;">
																	<div class="rbc-event-label">12:00 PM — 1:00 PM</div>
																	<div class="rbc-event-content">Lunch</div>
																</div>
																<div title="5:00 PM — 5:30 PM: Happy Hour" class="rbc-event" style="top: 73.913%; height: 2.17391%; left: 0%; width: 100%;">
																	<div class="rbc-event-label">5:00 PM — 5:30 PM</div>
																	<div class="rbc-event-content">Happy Hour</div>
																</div>
																<div title="8:00 PM — 9:00 PM: Dinner" class="rbc-event" style="top: 86.9565%; height: 4.34783%; left: 0%; width: 100%;">
																	<div class="rbc-event-label">8:00 PM — 9:00 PM</div>
																	<div class="rbc-event-content">Dinner</div>
																</div>
															</div>
														</div>
														<div class="rbc-day-slot rbc-time-column">
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-events-container">
																<div title="7:00 AM — 10:30 AM: Birthday Party" class="rbc-event" style="top: 30.4348%; height: 15.2174%; left: 0%; width: 100%;">
																	<div class="rbc-event-label">7:00 AM — 10:30 AM</div>
																	<div class="rbc-event-content">Birthday Party</div>
																</div>
															</div>
														</div>
														<div class="rbc-day-slot rbc-time-column">
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-events-container"></div>
														</div>
														<div class="rbc-day-slot rbc-time-column">
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-events-container"></div>
														</div>
														<div class="rbc-day-slot rbc-time-column">
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-events-container"></div>
														</div>
														<div class="rbc-day-slot rbc-time-column">
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-events-container">
																<div title="7:30 PM — : Late Night Event" class="rbc-event rbc-event-continues-later" style="top: 84.7826%; height: 15.1449%; left: 0%; width: 85%;">
																	<div class="rbc-event-label">7:30 PM — </div>
																	<div class="rbc-event-content">Late Night Event</div>
																</div>
																<div title="7:30 PM — 11:30 PM: Late Same Night Event" class="rbc-event rbc-event-continues-later" style="top: 84.7826%; height: 15.1449%; left: 50%; width: 50%;">
																	<div class="rbc-event-label">7:30 PM — 11:30 PM</div>
																	<div class="rbc-event-content">Late Same Night Event</div>
																</div>
															</div>
														</div>
														<div class="rbc-day-slot rbc-time-column">
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-timeslot-group">
																<div class="rbc-time-slot"></div>
																<div class="rbc-time-slot"></div>
															</div>
															<div class="rbc-events-container">
																<div title=" — 2:00 AM: Late Night Event" class="rbc-event rbc-event-continues-earlier" style="top: 0%; height: 8.69565%; left: 0%; width: 100%;">
																	<div class="rbc-event-label"> — 2:00 AM</div>
																	<div class="rbc-event-content">Late Night Event</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
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
