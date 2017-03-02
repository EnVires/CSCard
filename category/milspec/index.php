<?include($_SERVER["DOCUMENT_ROOT"].'/template/header.tpl');?>
	

		<script type="text/javascript" src="/template/js/openapi.js"></script> 
			<script type="text/javascript" src="/template/js/server.js"></script> 
				<script type="text/javascript" src="/template/js/services.js"></script> 
	<script type="text/javascript" src="/api/opencase.js"></script>
	
	<div class="card_holder">
			

		
		<!-- УБРАТЬ КЛАСС tutor В ОБЫЧНЫХ БИЛЕТАХ -->
		<div class="playcard playcard-4 playcard-milspec nomoney">
			<!-- БЛОК ПОКУПКИ БЫЛЕТА -->
			
				
				<div class="shutupandtakemymoney">
					<img class="shut-light" src="/images/buycard_light.png">

					
						
							<button class="gold" id="gogame">
								Разыграть билет за 29<small>p</small>
								<span>Пополните баланс на 23.5<small>o</small></span>
							</button>
						
					


					<!-- Если недостаточно средств или нужно авторизоваться -->

					<div class="putmoney-block">
						
							
								<div class="putmoney-inner mini">
									<p>У вас недостаточно средств!</p>
									<div class="addmoney white animation putmoney">
										<!--<div><input type="phone" placeholder="" value="200"  class="invoiceMoney"><small>p</small></div>-->
										<button class="button-line refill">Пополнить баланс</button>
									</div>
								</div>
							
						
					</div>

				</div>
				
			

			<!-- БЛОК С ПОЗДРАВЛЕНИЕМ И ПРЕДМЕТОМ -->
			<div class="winner-popup" style="display: none;">
				
				<div class="wp-head1">
					
						Поздравляем!
					
				</div>
				<div class="wp-head2">
					
						Это ваш
					
					<span></span>
				</div>
				<div class="wp-item">
				</div>
				<div class="wp-buttons">
					<div>
						
						<button class="gold go-next">
							Попробовать ещё
						</button>
						
					</div>
					<div class="wp-buttons-bottom" style="padding: 15px 0 0;">
						
						<button class="green mini btn-sell-item">
							Продать за <span></span><small>p</small>
						</button>
						<a href="/user/619526" class="buttonlink green mini btn-takeit">
							Забрать
						</a>
						<a href="/" class="buttonlink green mini btn-tohome">
							На главную
						</a>
						
					</div>
				</div>
				<div class="wp-left dno">
					<p>Поделитесь с друзьями и <nobr>получите <b>50</b><small>p</small> на аккаунт!</nobr></p>
					<p style="padding-top: 10px;"><a href="#" class="bold">Рассказать друзьям</a></p>
				</div>
				<div class="wp-right">
					<p>Заберите предмет в <a href="/user/619526">профиле</a> <nobr>в течение часа!</nobr></p>
					<p style="padding-top: 10px;"><a href="#" class="bold viewURL">Осмотреть в игре</a></p>
				</div>
				<img class="wp-light" src="/images/winner_light.png">
				<div class="wp-light-colored"></div>
				<img class="wp-light-anim" src="/images/winner_light_anim.png">
			</div>

			<!-- БЛОК СОДЕРЖИМОГО БИЛЕТА -->
			<div class="playcard-inner">

				<div class="scratchcases">
					
						
						<div class="scratchcase" id="case-0" data-id="0" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-1" data-id="1" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-2" data-id="2" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-3" data-id="3" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-4" data-id="4" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-5" data-id="5" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-6" data-id="6" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-7" data-id="7" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-8" data-id="8" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
				</div> <!-- scratchcases -->

				<div class="card-right">
					<img src="/images/arrow_extra_right.png" class="card-extraarrow-right">
					<div class="card-icon"><img src="/images/case/icons/milspec.png"></div>
					<div class="card-name">Армейский билет</div>
					<div class="card-extra">
						<div class="card-extracase">
							
							<div class="scratchcase off" id="case-10" data-id="10" style="cursor: url(&quot;/images/coin.png&quot;) 5 5, default;">
								<div class="item-scratch">
									<div class="picture">
									</div>
									<div class="descr">
									</div>
								</div>
							<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div> <!-- scratchcase -->
							
						</div>
					</div>
					<div class="card-rules">
						<b>Основные правила CScard.ru:</b>
						<ul>
							<li>откройте 3 одинаковых предмета и получите его!</li>
							<li>3 попытки + 1 дополнительная по желанию</li>
							<li>гарантированный выигрыш для каждого!</li>
						</ul>
					</div>
				</div>

				<div class="card-extraerase">
					<img src="/images/arrow_extra_left.png" class="card-extraarrow-left">
					<button class="button pic large" id="extraerase">
						+1 попытка
						<span class="extraPrice">сейчас бесплатно!</span>
					</button>
					<button class="button-line refill" style="display: none">
						Недостаточно средств — пополните баланс!
					</button>
					<div class="ce-text">
						<div class="ce-item">Есть шанс выиграть <span id="possible_item"></span></div>
						<div>Испытаете удачу или сразу заберёте гарантированный выигрыш?</div>
					</div>
				</div>

				
				<div class="card-id">XXXXXXXX</div>
				
				<div class="card-game csgo"></div>
			</div> <!-- playcard-inner -->

			<!-- Мелкие фаны -->
			<div class="card-funny card-funny-2">
				<img src="/images/funny_tear.png">
			</div>
			<div class="card-funny card-funny-3">
				<img src="/images/funny_nichosi.png">
			</div>
			<div class="card-funny card-funny-4">
				<img src="/images/funny_satana.png">
			</div>
			<div class="card-funny card-funny-5">
				<img src="/images/funny_wish.png">
			</div>
			<div class="card-funny card-funny-6">
				<img src="/images/funny_cat.png">
			</div>

			<!-- Большие фаны на 4 слот -->
			<div class="card-funny card-funny-1">
				<img src="/images/funny_gabe.png">
			</div>
			<div class="card-funny card-funny-7">
				<img src="/images/funny_sahar.png">
			</div>
			<div class="card-funny card-funny-8">
				<img src="/images/funny_santa.png">
			</div>
		</div> <!-- playcard -->
	
			</div>
	
	
	
	<div class="playcard playcard-4 playcard-milspec nomoney">
			<!-- БЛОК ПОКУПКИ БЫЛЕТА -->
			
				
				<div class="shutupandtakemymoney">
					<img class="shut-light" src="/images/buycard_light.png">

					
						<button class="gold" id="gogame">
							Разыграть билет за 19<small>p</small>
						</button>
					


					<!-- Если недостаточно средств или нужно авторизоваться -->

					<div class="putmoney-block">
						
							<div class="putmoney-inner mini">
								<p style="padding: 0; margin: 0;">Извените, <a href="#" class="link login">на боте нет оружия</a></p>
							</div>
						
					</div>

				</div>
				
			

			<!-- БЛОК С ПОЗДРАВЛЕНИЕМ И ПРЕДМЕТОМ -->
			<div class="winner-popup" style="display: none;">
				
				<div class="wp-head1">
					
						Поздравляем!
					
				</div>
				<div class="wp-head2">
					
						Это ваш
					
					<span></span>
				</div>
				<div class="wp-item">
				</div>
				<div class="wp-buttons">
					<div>
						
						<button class="gold go-next">
							Попробовать ещё
						</button>
						
					</div>
					<div class="wp-buttons-bottom" style="padding: 15px 0 0;">
						
						<button class="green mini btn-sell-item">
							Продать за <span></span><small>p</small>
						</button>
						<a href="/user/" class="buttonlink green mini btn-takeit">
							Забрать
						</a>
						<a href="/" class="buttonlink green mini btn-tohome">
							На главную
						</a>
						
					</div>
				</div>
				<div class="wp-left dno">
					<p>Поделитесь с друзьями и <nobr>получите <b>50</b><small>p</small> на аккаунт!</nobr></p>
					<p style="padding-top: 10px;"><a href="#" class="bold">Рассказать друзьям</a></p>
				</div>
				<div class="wp-right">
					<p>Заберите предмет в <a href="/user/">профиле</a> <nobr>в течение часа!</nobr></p>
					<p style="padding-top: 10px;"><a href="#" class="bold viewURL">Осмотреть в игре</a></p>
				</div>
				<img class="wp-light" src="/images/winner_light.png">
				<div class="wp-light-colored"></div>
				<img class="wp-light-anim" src="/images/winner_light_anim.png">
			</div>

			<!-- БЛОК СОДЕРЖИМОГО БИЛЕТА -->
			<div class="playcard-inner">

				<div class="scratchcases">
					
						
						<div class="scratchcase" id="case-0" data-id="0" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-1" data-id="1" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-2" data-id="2" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-3" data-id="3" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-4" data-id="4" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-5" data-id="5" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-6" data-id="6" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-7" data-id="7" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
						
						<div class="scratchcase" id="case-8" data-id="8" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
							<div class="item-scratch">
								<div class="picture"></div>
								<div class="descr"></div>
							</div>
						<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div>
						
					
				</div> <!-- scratchcases -->

				<div class="card-right">
					<img src="/images/arrow_extra_right.png" class="card-extraarrow-right">
					<div class="card-icon"><img src="/images/case/icons/milspec.png"></div>
					<div class="card-name">Армейский билет</div>
					<div class="card-extra">
						<div class="card-extracase">
							
							<div class="scratchcase off" id="case-10" data-id="10" style="cursor: url(http://cscard.ru/images/coin.png) 5 5, default;">
								<div class="item-scratch">
									<div class="picture">
									</div>
									<div class="descr">
									</div>
								</div>
							<img src="/images/empty.png" crossorigin="" style="position: absolute; width: 100%; height: 100%; display: inline;"><canvas width="160" height="120" style="position: absolute; width: 100%; height: 100%;"></canvas></div> <!-- scratchcase -->
							
						</div>
					</div>
					<div class="card-rules">
						<b>Основные правила CScard.ru:</b>
						<ul>
							<li>откройте 3 одинаковых предмета и получите его!</li>
							<li>3 попытки + 1 дополнительная по желанию</li>
							<li>гарантированный выигрыш для каждого!</li>
						</ul>
					</div>
				</div>

				<div class="card-extraerase">
					<img src="/images/arrow_extra_left.png" class="card-extraarrow-left">
					<button class="button pic large" id="extraerase">
						+1 попытка
						<span class="extraPrice">сейчас бесплатно!</span>
					</button>
					<button class="button-line refill" style="display: none">
						Недостаточно средств — пополните баланс!
					</button>
					<div class="ce-text">
						<div class="ce-item">Есть шанс выиграть <span id="possible_item"></span></div>
						<div>Испытаете удачу или сразу заберёте гарантированный выигрыш?</div>
					</div>
				</div>

				
				
				
				<div class="card-game csgo"></div>
			</div> <!-- playcard-inner -->

			<!-- Мелкие фаны -->
			<div class="card-funny card-funny-2">
				<img src="/images/funny_tear.png">
			</div>
			<div class="card-funny card-funny-3">
				<img src="/images/funny_nichosi.png">
			</div>
			<div class="card-funny card-funny-4">
				<img src="/images/funny_satana.png">
			</div>
			<div class="card-funny card-funny-5">
				<img src="/images/funny_wish.png">
			</div>
			<div class="card-funny card-funny-6">
				<img src="/images/funny_cat.png">
			</div>

			<!-- Большие фаны на 4 слот -->
			<div class="card-funny card-funny-1">
				<img src="/images/funny_gabe.png">
			</div>
			<div class="card-funny card-funny-7">
				<img src="/images/funny_sahar.png">
			</div>
			<div class="card-funny card-funny-8">
				<img src="/images/funny_santa.png">
			</div>
		</div>
		
		<div style="padding: 0px 50px 20px;">
				<h3 style="text-align: center;">Содержимое билета</h3>
				<div>
					
						
		<a href="https://csgo.tm/?search=MP7%20%7C%20%D0%93%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLSKMyJYfxSVTKNRUfg7-gzpGxg_7cNqQdr4prlSflnq59bBM-QlNYoeScOBXfLQZwr66ElphKZaK5yKon_vi3nrOnBKBURfsg7lXw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MP7</strong>
			<span>Городская опасность</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=AK-47%20%7C%20%D0%A7%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%B3%D0%BB%D1%8F%D0%BD%D0%B5%D1%86" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhoyszJemkV4N27q4KcqPrxN7LEmyUDsJIh27-YpYmmiVDm_UFuZ2vzJYPDJlRsYw2C8lC5w-fu0Je_6ZrB1zI97TOUU9Z0/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>AK-47</strong>
			<span>Черный глянец</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=AUG%20%7C%20%D0%90%D0%BD%D0%BE%D0%B4%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%B0%D1%8F%20%D1%81%D0%B8%D0%BD%D0%B5%D0%B2%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot6-iFAZu7P3JZyR97s63go-0m_7zO6-fzjsEv5Yp0uuQ8dui3wTt_RBsYG-lJdSXJg5sMFGDr1C7wO7sg5G06IOJlyVTQYQwXg/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>AUG</strong>
			<span>Анодированная синева</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=AUG%20%7C%20%D0%9A%D1%80%D1%8B%D0%BB%D1%8C%D1%8F" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56IeSKOC5YdAHDFahbTuYF9R3rNis77893GtLno-pfKwnt5YGSZ-QoYo0YGsPSUqCCZQGou05s1fBdKMeJ8nvt2SX3ejBdNGsYVYA/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>AUG</strong>
			<span>Крылья</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=AWP%20%7C%20%D0%97%D0%BC%D0%B5%D0%B8%D0%BD%D0%B0%D1%8F%20%D0%BA%D0%BE%D0%B6%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FBRw7ODGcDZH09GzkImemrmsY-PUxmgAv5Up2rnFrdmijlXgqUA_ZjzzIIKQcQA7Y1uE_Fbtlefum9bi68KPYhsE/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>AWP</strong>
			<span>Змеиная кожа</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=CZ75-Auto%20%7C%20%D0%9A%D1%80%D0%BE%D0%B2%D0%B0%D0%B2%D0%B0%D1%8F%20%D0%BF%D0%B0%D1%83%D1%82%D0%B8%D0%BD%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhvazvVBKJNY_g_8AH5BGlj7p8yBIGwr-8Eelm6toLDZ-J9MNFETsDXUvTXYg_8u05qhvAML8bdvmqxikWkcSVq/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>CZ75-Auto</strong>
			<span>Кровавая паутина</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=CZ75-Auto%20%7C%20%D0%93%D0%B5%D0%BA%D1%81%D0%B0%D0%BD" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhvazvADbVbVPAiywXpDS4n5YllBYbipe0HLw_m5oCVMrMuOYseS8XYCP6PZAGu409uiKRdKJKI9Sjuw223bZyfXPm3/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>CZ75-Auto</strong>
			<span>Гексан</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=CZ75-Auto%20%7C%20%D0%A1%D0%BF%D0%B8%D1%80%D0%B0%D0%BB%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhmfzvFGLJfSPAF-Q3oADI_psQ0V4_n8-xWfVrv5YHDOuV_MYsfHJWCDPTTZ1ir709uhqAOLpCAoinxnXO-uOr7WwI/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>CZ75-Auto</strong>
			<span>Спираль</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Desert%20Eagle%20%7C%20%D0%91%D1%80%D0%BE%D0%BD%D0%B7%D0%BE%D0%B2%D0%B0%D1%8F%20%D0%B4%D0%B5%D0%BA%D0%BE%D1%80%D0%B0%D1%86%D0%B8%D1%8F" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYcwn9A7JRUu8_yxv8CDU55MJcWdKy_q4LZw7os4LCMLcsMdAYTJbSUqWDZQr040hr06NaKZTdoHi83SzoPmwDCBf1ujVTJL13O6g/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Desert Eagle</strong>
			<span>Бронзовая декорация</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Dual%20Berettas%20%7C%20%D0%A7%D0%B5%D1%80%D0%BD%D0%B0%D1%8F%20%D0%BB%D0%B8%D0%BC%D0%B1%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5-OOqhNQhkZzvRBKFNU_sF8QTlHSIh18VxVcG5yLYDLVWq6ZyUZrItNtkYHsXTCPTVYVj740Jp1vVfeZOMpyK-iCrgP2cOWRDs-TgNhqbZ7VuDunxe/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Dual Berettas</strong>
			<span>Черная лимба</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Dual%20Berettas%20%7C%20%D0%94%D1%80%D0%B0%D0%BA%D0%BE%D0%BD%D0%B8%D0%B9%20%D0%B4%D1%83%D1%8D%D1%82" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJf0Ob3dShD4N6zhpKOg-P1DL_Dl2xe5tZOh-zF_Jn4xgHh_UY6YWv7cNPHcFBtYguD-Fbsx-rsh5e-upXIyXE3vydwtC3dykOpwUYb4qDnZ3s/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Dual Berettas</strong>
			<span>Драконий дуэт</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Dual%20Berettas%20%7C%20%D0%9F%D0%B0%D0%BD%D1%82%D0%B5%D1%80%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5-OOqhNQh0fTvSAK5KVPAoywXpDS4n5YliBtazruNQfgrssNfPN-IqYtkdSpTZU_OCYAir70luiaAPfZOIqHznw223bZvDH3kW/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Dual Berettas</strong>
			<span>Пантера</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=FAMAS%20%7C%20%D0%A1%D0%BC%D0%B5%D1%80%D1%82%D0%B5%D0%BD%D0%BE%D0%BA" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhvazvGDq9TV_wu4BHTBCI24dJuGoLhpOgHewnutdGUYuQpNt5MSpKFX6OGZg7_4x1p1aBZL5bdoSPn2iX3ejBdT4JNcno/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>FAMAS</strong>
			<span>Смертенок</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=FAMAS%20%7C%20%D0%93%D0%B5%D0%BA%D1%81%D0%B0%D0%BD" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhvazvADbVbVPAiywXpDS4n5YkxDI_hoeoEfQzq54TCOuEvM4xFF5bWWPCFYQj-60w4hfVUfJaMpH7ow223bU8aEp6L/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>FAMAS</strong>
			<span>Гексан</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=FAMAS%20%7C%20%D0%92%D1%8B%D0%B6%D0%B8%D0%B2%D1%88%D0%B8%D0%B9" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLuoKhRf0Ob3dzxP7c-JmIWFg_bLPr7Vn35cpschj7CS89v02QbnqEJkZTv2JIOdJgA5Z1nY-wK7kru8gZbuvpWfnSR9-n51wvO07sM/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>FAMAS</strong>
			<span>Выживший</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Five-SeveN%20%7C%20%D0%9A%D0%B0%D0%BC%D0%B8" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9CblhV_Q3_TfhDCM7_cotDY_koOwCKwS-4oLEN7F4Mo1FTpWDCP-OYV_07khrifJcLZGB8ynm2jOpZDkegjxWog/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Five-SeveN</strong>
			<span>Ками</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Five-SeveN%20%7C%20%D0%9F%D0%B0%D1%81%D0%BB%D0%B5%D0%BD" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9CblhWvk14w3-Ghg_7cNqQdr49LlUL17t54PGZeUuZdBIGcPXD_CCMF__7hlthfJeLpfcoXm-jC66aXBKBURLD0JxwQ/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Five-SeveN</strong>
			<span>Паслен</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Five-SeveN%20%7C%20%D0%9D%D0%B8%D1%82%D1%80%D0%BE" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLOzLhRlxfbGTi5N09OklY6Mksj1MLjUmH9C18h0juDU-MKii1XlqUVlNm3wJoSUcVQ-YQ3U_QTrxuq91pXu7Z7ByyBgvnVz5XuMgVXp1lly4v3H/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Five-SeveN</strong>
			<span>Нитро</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Five-SeveN%20%7C%20%D0%93%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9ArVhWvws8RvpHyI819JxVta4yLMHM12t4O2bZuR1dYVSScnYXaWBZ1_1vEpt0vVUfMPd8yLu2SXgPzhfXxvt-GINkO-O7LdphHFWHSZb54FIQQ/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Five-SeveN</strong>
			<span>Городская опасность</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=G3SG1%20%7C%20%D0%9B%D0%B0%D0%B7%D1%83%D1%80%D0%BD%D0%B0%D1%8F%20%D0%B7%D0%B5%D0%B1%D1%80%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Z_CyYQh0YjvYBKJMXfY7-TfuBTI318pmUN6j-vVXLAvu4tGTZ7h-NNsaTcLXWKSBbl2o6h861PAOJpzYqCjojH7sa24DRVO1recBjp_I/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>G3SG1</strong>
			<span>Лазурная зебра</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=G3SG1%20%7C%20%D0%92%D0%B8%D1%82%D1%80%D0%B0%D0%B6" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Z_CyYQhvazvADbVbTPo27Q_jBxgw-sZ1W-i78r8PPFHx4NDHO-IlMtBFGMTWCfLSMwyr6Ehr1qBYKJOI9HjoiC69OmkOWkLs_HVExrGy_c776A/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>G3SG1</strong>
			<span>Витраж</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=G3SG1%20%7C%20%D0%9C%D1%80%D0%B0%D0%BA" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Z_CyYQhmfzvFUrNZDco34RrnEBg_7cNqQdr49blecVrn4tCXN-EtZI5JHpHUDP-AZQ35vx9s06FbfpGJ9nu8iyjraHBKBURjthrGIA/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>G3SG1</strong>
			<span>Мрак</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Galil%20AR%20%7C%20%D0%A1%D0%B8%D0%BD%D0%B8%D0%B9%20%D1%82%D0%B8%D1%82%D0%B0%D0%BD" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQXMPrRXSPQ0_R3hWnck18tqU9-iue9Ufwi6vNeVMuN5ZIpPTZOFWffXbgCu40g806deL8fdpSy72SXpaW8UG028Qrrckr0/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Galil AR</strong>
			<span>Синий титан</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Galil%20AR%20%7C%20%D0%9A%D0%B0%D0%BC%D0%B8" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQzbPqdfUPw2ywPtBC4N5cJnXcK7ubhRKl67s9fGMLh4ZYlKHsnYX_-BMA_9608wiahfK5KLoHzq23u8bGgUG028KBH0d08/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Galil AR</strong>
			<span>Ками</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Galil%20AR%20%7C%20%D0%9F%D0%B5%D1%81%D1%87%D0%B0%D0%BD%D0%B0%D1%8F%20%D0%B1%D1%83%D1%80%D1%8F" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQfXPrNfUvEp4Af-BBg_7cNqQdr4oeJeeAW6tdPAMbQtZdgfTpHYDvOHZFj9v0s91aJZe5fa8Xnrjyi7OHBKBURcjVoNTA/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Galil AR</strong>
			<span>Песчаная буря</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Galil%20AR%20%7C%20%D0%9E%D1%81%D0%BA%D0%BE%D0%BB%D0%BA%D0%B8" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQzbPqNMSfgq-A3TCzUz_shcWdKy_q4LZw3tsoWUM-EkONFMG5WDC_WENQyvvkxu0qEIeZeK8inn2yjtOWkKXhX1ujVTjkT5DC0/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Galil AR</strong>
			<span>Осколки</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Glock-18%20%7C%20%D0%A1%D0%B8%D0%BD%D1%8F%D1%8F%20%D1%82%D1%80%D0%B5%D1%89%D0%B8%D0%BD%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhvazvBE6FPSfA24RrpNio37M52WZni9e5WflnvtNHDOrAvM9BKG5bSU6CHZVr460I91aEMfZaNqS653SrsJC5UDM_8leUW/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Glock-18</strong>
			<span>Синяя трещина</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Glock-18%20%7C%20%D0%97%D0%B0%D1%85%D0%BE%D1%80%D0%BE%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhkZzvFDa9dV8o-8Qn4ATM95MtcWdKy_q4LZw7r5YLBO-J5MtAZHsfRWvCFZgv97Rpq1fRdKsDbqS7o3C-8PWhYWUL1ujVTUehMDk4/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Glock-18</strong>
			<span>Захоронение</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Glock-18%20%7C%20%D0%A0%D0%B5%D0%B0%D0%BA%D1%82%D0%BE%D1%80" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0v73fyhB4Nm3hr-bluPgNqnfx1RW5MpygdbM8Ij8nVn68xJua2v6JNKQcg89aVnW8lK2xejv0MW_vp3KmHZr6yQhsSmOmxa-hwYMMLLLWAsqTQ/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Glock-18</strong>
			<span>Реактор</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Glock-18%20%7C%20%D0%9F%D1%80%D0%B8%D0%B7%D1%80%D0%B0%D0%BA%D0%B8" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf1OD3djFN79fnzL-chfbgO6LCqWZU7Mxkh6eT9o6gi1fn-0duMG2gdoDDcAE_aA6FrwS5xevs1Mft6cvOySdh6SQr-z-DyMHeYcY1/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Glock-18</strong>
			<span>Призраки</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=M249%20%7C%20%D0%9C%D0%B0%D0%B3%D0%BC%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52ZrfsDzZ2TQvAEqlaVfQ0ywXpDS4n5YlhDYPn8uoDcQzu4deXOuYvZNtJTcLZW6WHZlv_vx87g_VYeZXcpyLow223bQPPKCbp/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>M249</strong>
			<span>Магма</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=M249%20%7C%20%D0%91%D0%BB%D0%BE%D0%BA%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52ZrfsDzRyTQmQVflhT_Ax4Af-Nio37M52WZnvpbgDfVrtttHPYuV9Yd8dS5TZXfSPMF306Ew-hPBcfpLa8X_qiX_vJC5UDLG-MWCi/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>M249</strong>
			<span>Блокировка</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=M4A1-S%20%7C%20%D0%9A%D1%80%D0%BE%D0%B2%D0%B0%D0%B2%D1%8B%D0%B9%20%D1%82%D0%B8%D0%B3%D1%80" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_0jyxrpDTM778Jxa9qz87ITJBLq5dbCYrctM9wfSsOBCaLSYQ3-vE5p1qFbKZeKpSLujnm4PmZeWRri5CtazyA3u5I_/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>M4A1-S</strong>
			<span>Кровавый тигр</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=M4A1-S%20%7C%20%D0%A1%D0%BC%D0%B5%D1%88%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BA%D0%B0%D0%BC%D1%83%D1%84%D0%BB%D1%8F%D0%B6" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO-jb-dluX9MLrcmVRd4cJ5nqeWrNit2AewqhY_Yj31cIDGJgRtZV-E8gS2xOzv0Z_qucvJm3M16SFw-z-DyBeWkcOk/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>M4A1-S</strong>
			<span>Смешанный камуфляж</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=M4A4%20%7C%20%D0%A2%D1%83%D1%81%D0%BA%D0%BB%D1%8B%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%BE%D1%81%D1%8B" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyR3TR7HA7JfX_Q3ywr7Nio37M52WZnioO4DfF_qvIvHOrArYdoZF5GGUvGAYwCuvEw_haIOfJPc9im5jCjtJC5UDOMEsaUh/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>M4A4</strong>
			<span>Тусклые полосы</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MAC-10%20%7C%20%D0%93%D1%80%D0%B0%D0%B4%D0%B8%D0%B5%D0%BD%D1%82" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7umeldf0vL3dzxG6eO6nYeDg7miZbqDxj8B7Z0n2-3E94mjjQTirRI9MTjyIIWQeg84Y1DS_lm3wOfom9bi6-g13CfU/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MAC-10</strong>
			<span>Градиент</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MAC-10%20%7C%20%D0%9A%D1%80%D0%B0%D1%81%D0%BA%D0%B8" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQh5hlcX0nvUOGsx8DdQBJjIAVHubSaJgZjgqOGJWxHuIziw9SKlqWlMuLUkjIB7Jxz2LjF8dn0jFLk8kJsNW71IoKXdBh-Pw_L76JwEA/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MAC-10</strong>
			<span>Краски</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MAC-10%20%7C%20%D0%A3%D0%BB%D1%8C%D1%82%D1%80%D0%B0%D1%84%D0%B8%D0%BE%D0%BB%D0%B5%D1%82" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeDkYAh0fTvSFLJOUPAF-Q3oADI_ppA1AIHmp-8CfljmttPHNeMkM94dG8aCW_fXN1j1uBpqiPVVepTY9S3xnXO-QDw0ayE/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MAC-10</strong>
			<span>Ультрафиолет</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MAG-7%20%7C%20%D0%9F%D0%BE%D0%B4%D0%B6%D0%B8%D0%B3%D0%B0%D1%82%D0%B5%D0%BB%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeTiDyR3TQnDBvdhWvwo8QrlHTM35vhuUdO_4rZIeV3r4dbPM-YtYt4fHcGBCPODMA_4ux9shfVfKcDa837rjirrbm5eXQ2rpDxXSu86JQ/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MAG-7</strong>
			<span>Поджигатель</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MAG-7%20%7C%20%D0%A0%D0%B0%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%81%D1%82%D1%80%D0%B0%D0%B6" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeTiDzRyTQnDBvdhVPA74g3iNio37M52WZnho-tRcAnr4deUMbF_NN9ITMWGWvWOZlqs6ENr0qMIfpOPoH_r3HzqJC5UDA1d_hMd/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MAG-7</strong>
			<span>Райский страж</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MAG-7%20%7C%20%D0%9E%D0%B1%D1%8A%D0%B5%D0%BC%D0%BD%D1%8B%D0%B5%20%D1%88%D0%B5%D1%81%D1%82%D0%B8%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA%D0%B8" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeTiDz9-TQ3BDrNfVPA-5gfiNio37M52WZm18-1efl3o4YbFNuQoMd0fFpPTXveBNQ77u0luh6ZfLsSN8S_t2C_hJC5UDBo0wd3v/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MAG-7</strong>
			<span>Объемные шестиугольники</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MP7%20%7C%20Armor%20Core" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLSKMSZYfxSVPrVSSOc7-QfoDDU818pmUN6j-vVQew-75dDBZuIlNNBLF8fUDPaAMgv-vEswiaIOesDb83-93H66OGteRVO1rYplVZEc/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MP7</strong>
			<span>Armor Core</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MP7%20%7C%20%D0%A7%D0%B5%D1%80%D0%B5%D0%BF%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLSKOC5YYQ_XDaxNY_g_8AH5BGkzuZUzVtThpO5fLFi75YqUOrkuM41PG8LWCPGDblz6uB4-iKkILsSPvmqxiih17oj8/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MP7</strong>
			<span>Черепа</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=AK-47%20%7C%20%D0%AD%D0%BB%D0%B8%D1%82%D0%BD%D0%BE%D0%B5%20%D1%81%D0%BD%D0%B0%D1%80%D1%8F%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzRyTQXJVfdhUfQp4A3-EBg_7cNqQdr48-9fLQrnsIXCNLkuYYxLGMbVD_SOMl_54kw8iaQMKsTY8yzq3y3oPXBKBUT7Bt81Vg/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>AK-47</strong>
			<span>Элитное снаряжение</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MP9%20%7C%20%D0%94%D1%80%D0%BE%D1%82%D0%B8%D0%BA" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLqKMyJYfxSbPqNWWeMo-wbTBCI24dJuGoLl8roAeQvvvIfGM7MrNtpFGMDSWaCDY1_5uU061PddfcOP8iy5jij3ejBdfohEiJw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MP9</strong>
			<span>Дротик</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=MP9%20%7C%20%D0%A1%D0%BC%D0%B5%D1%80%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%8F%D0%B4" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLqKMyJYfxSbPqRbXfE27Tf8Bi4h58lcWdKy_q4LZwW64ILPNuYlMNlJGpGDXaWGNVz1uB4xgqZeesbdpX7riSruM20NXRD1ujVTojjdwSw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>MP9</strong>
			<span>Смертельный яд</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Negev%20%7C%20%D0%A2%D1%80%D0%B0-%D1%82%D0%B0-%D1%82%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJghkZzvAE6FKXeE74DfiDCA3_vhuUdO_4rZIfFnotteSMLN_N4tFHMHUXaKFYw2ou004gfIPKsbYp3vsiS_qb2ZYCQ2rpDyjN8Rd0w/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Negev</strong>
			<span>Тра-та-та</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Negev%20%7C%20%D0%9F%D1%83%D1%81%D1%82%D1%8B%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B0%D1%82%D0%B0%D0%BA%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJghkZzvMBKdbSsou_RztBzQm59Vua9qz87ITJBLottSSNOIkY9EfFsXYDvKBNQz57Uo-iKFYepOIpC3s2yXtOWZfWRfo5CtazzOzaZfr/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Negev</strong>
			<span>Пустынная атака</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Negev%20%7C%20%D0%91%D0%BE%D0%B5%D1%86" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJghmfzvMBKdbSso9-Af-EBg_7cNqQdr4oupecA_mvYbENLR_YtFJTcXYXPLTYgyovxk4gqlYLJeK8n-833i4P3BKBUTnQEPFkQ/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Negev</strong>
			<span>Боец</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Negev%20%7C%20%D0%9F%D0%BE%D1%87%D0%B2%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJgh0YjvMBKdbSsou4Rr9NjM3-tViXdmJ-r4CIEmyqoOVMbQlZYkeHsbZWvTXZwCvuEM6iPALJpyAp3no33-7MzpYUhDr-2Ia2LjQEoGtsFM/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Negev</strong>
			<span>Почва</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Nova%20%7C%20%D0%9F%D1%80%D0%B8%D0%B7%D1%80%D0%B0%D1%87%D0%BD%D1%8B%D0%B9%20%D0%BA%D0%B0%D0%BC%D1%83%D1%84%D0%BB%D1%8F%D0%B6" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DyR3TQfDDK9hS_o18DfuBTI318pmUN6j-vUHKw_ot4DAZ7V-YY1EHMWEWvOOZg_14kswg6JYJ8bb9CLsiCzoaTheRVO1reogNdNi/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Nova</strong>
			<span>Призрачный камуфляж</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Nova%20%7C%20%D0%9B%D0%B5%D1%81%D0%BD%D0%B8%D1%87%D0%B8%D0%B9" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DzRyTQrNF6FhTvQ08w3-Nio37M52WZm3o-1Tel3mvdHEO7coYolOTMeGXfKFZQ_44kg_iacOL5WIpCrm2ym_JC5UDHUVB3qN/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Nova</strong>
			<span>Лесничий</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Nova%20%7C%20%D0%91%D1%83%D1%80%D1%8F" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0Dz9-TRfHALNXWPAF9hrtHygN5cJnXcK7ue8FL1m54oGVYOQlYtEYGsfRXPTQMgGs70M5gKZbJpKKqS-9jy-7OmwUG028bf9lHZw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Nova</strong>
			<span>Буря</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=P2000%20%7C%20%D0%A1%D0%BB%D0%BE%D0%BD%D0%BE%D0%B2%D0%B0%D1%8F%20%D0%BA%D0%BE%D1%81%D1%82%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQfXPrAMDKVqywH6BjUr18pmUN6j-vUCKAzvtIrANuZ_NdwdTpTRWveBYQn1vExpgKBffsaLqS-61SzqOT8NRVO1rasOQLUq/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>P2000</strong>
			<span>Слоновая кость</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=P2000%20%7C%20%D0%9F%D1%83%D0%BB%D1%8C%D1%81" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQfXPrAMDKVqyxj5BTQ318pmUN6j-vUCcQXvtoLPZ-UuMY4fGJWGW_eOb1yo60hqhPdZKMCAoSPmjyXpP2YJRVO1rVbjdAVC/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>P2000</strong>
			<span>Пульс</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=P2000%20%7C%20%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D1%8B%D0%B5%20%D1%84%D1%80%D0%B0%D0%B3%D0%BC%D0%B5%D0%BD%D1%82%D1%8B" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQzbPrBRUOwF9wnhBhg_7cNqQdr4p-5TcATvstCVNbUpOIpKSZXYWfOGMlv9vEIw1PMJLZ2N8SLviSXpbHBKBURSpl0FWw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>P2000</strong>
			<span>Красные фрагменты</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=P250%20%7C%20%D0%A3%D0%BB%D0%B5%D0%B9" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDz9-TRbHBahbRMo38QzlHCp8vcRhUoKyo7hWfA-5sdHAYrkpN9pETsfYUvXTZVv_6xhs1vNaKZLcoTSvg3pCiqtZ3A/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>P250</strong>
			<span>Улей</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=P250%20%7C%20%D0%A0%D0%B6%D0%B0%D0%B2%D0%B0%D1%8F%20%D1%81%D1%82%D0%B0%D0%BB%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzZqTQDGEaFKWPA05w3TGi4-_sJxa9qz87ITJBLu5oDCYbItZt8eTMbVXvWANFivu0lthKdUfZyIqCrnjCXob25eWxG55Ctaz0FAzs2n/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>P250</strong>
			<span>Ржавая сталь</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=P250%20%7C%20%D0%92%D0%B0%D0%BB%D0%B5%D0%BD%D1%82%D0%BD%D0%BE%D1%81%D1%82%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzZ2TRSQVPBhX_o04Af5Gxg_7cNqQdr4r74DKwTn4oTDNbQvMotPTMnRUqKEMA797hhpg_VdJ5eK9irq3H_uMnBKBUShKRvMGg/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>P250</strong>
			<span>Валентность</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=P90%20%7C%20%D0%9C%D0%BE%D0%B4%D1%83%D0%BB%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKMTlYYAvbAKxcUPA_8DfhDCM7_cotBNawoL5fKl664dfBNbcrZYoZG8nQCKKENwD97hkx0qNYeZaKpXvoiDOpZDkZSZ5WrA/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>P90</strong>
			<span>Модуль</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=%D0%9F%D0%9F-19%20%D0%91%D0%B8%D0%B7%D0%BE%D0%BD%20%7C%20%D0%A1%D0%B8%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%D0%BB%D1%83%D1%82%D0%BE%D0%BD%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz55Pfm6PghmfzvWFLJPU_wp8TfkCCs0_MhtUei78r8PPFHxsoTHZeUpZN5IGpGCU_GCZQGovk4wgaZaecDbpijr2CzqOjgKWhq9q3VExrEWZCjBQQ/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>ПП-19 Бизон</strong>
			<span>Синие полутона</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=%D0%9F%D0%9F-19%20%D0%91%D0%B8%D0%B7%D0%BE%D0%BD%20%7C%20%D0%97%D0%BD%D0%B0%D0%BA%20%D0%B2%D0%BE%D0%B4%D1%8B" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz55Pfm6PghvazvVALRbTso55g3_HRg_7cNqQdr4o7gAeAnu5YOXMuF4ZI5NG5HVU_GOMl_1vx1pg6VcLsCB8yvrjijga3BKBURhAfg3aQ/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>ПП-19 Бизон</strong>
			<span>Знак воды</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=SCAR-20%20%7C%20%D0%9A%D1%80%D0%BE%D0%B2%D0%B0%D0%B2%D0%B0%D1%8F%20%D0%BF%D0%B0%D1%83%D1%82%D0%B8%D0%BD%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oN-KnYmdYeh39FqVcT8o-9RrnDDUN5cJnXcK7ubpXfwjs4tTBM-N6MI5KG5OCWaOOYF-v6x9qg_MPK8GM8SvsjyXvb24UG028Gn5RfL0/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>SCAR-20</strong>
			<span>Кровавая паутина</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=SCAR-20%20%7C%20%D0%97%D0%B5%D0%BB%D0%B5%D0%BD%D1%8B%D0%B9%20%D0%BC%D0%BE%D1%80%D0%BF%D0%B5%D1%85" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbmkOVUw7PTbTi5B7c7kxL-bkvb3NrbQnW5DuJZOh-zF_Jn4xgO1_kFqYjyiI4GRI1Q5Yw3W_QS9wu3t1569v57AnXFg7yZx4SuLlxKpwUYbBy30SVY/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>SCAR-20</strong>
			<span>Зеленый морпех</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=SCAR-20%20%7C%20%D0%93%D1%80%D0%BE%D1%82" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oN-KnYmdYcxX9EqNfTqdqywTpCCwN5cJnXcK7ub9QfgzntovBM-IlMY5OH5XRC_KGYFj6v01qg6VYLpLcp37njyXhaG8UG028mpvdaus/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>SCAR-20</strong>
			<span>Грот</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=SG%20553%20%7C%20%D0%A3%D0%BB%D1%8C%D1%82%D1%80%D0%B0%D1%84%D0%B8%D0%BE%D0%BB%D0%B5%D1%82" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oM7bgZgh0fTvSFLJOUPAF-Q3oADI_ppQ7BYS1r-lSe17vsdfONbUsMtxEGpPRWvLSMFz9vkwx1KJYKseNpnjxnXO-LevKDKA/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>SG 553</strong>
			<span>Ультрафиолет</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=SG%20553%20%7C%20%D0%91%D1%80%D1%8B%D0%B7%D0%B3%D0%B8%20%D0%B2%D0%BE%D0%BB%D0%BD%D1%8B" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oM7bgZgh0YjvREbJfRcot9R7pGhgw-sZ1W-i78r8PPFHx54PAM7QuOdtJTZKFCaKPMw_540kw1aNdJ5yMonvpiym7bGsOD0K4-3VExrGfBSee5g/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>SG 553</strong>
			<span>Брызги волны</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=SSG%2008%20%7C%20%D0%9F%D1%83%D1%87%D0%B8%D0%BD%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oJ-TlaAhmYzvOBLZXXeEy9QbTBCI24dJuGtGwoL9WeFnqstGUN7IrNd4eS8PQC_aOYA71u0g_hqILLsSJ8S6-iSX3ejBdMsZAA7k/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>SSG 08</strong>
			<span>Пучина</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=SSG%2008%20%7C%20%D0%A2%D0%B5%D0%BC%D0%BD%D0%B0%D1%8F%20%D0%B2%D0%BE%D0%B4%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oJ-TlaAhmfzvYBKJMXco-9RrnNio37M52WZnu9e8EfQW5sNDEMOF5ONlPHsjYWqPTNF_76h9q06YPLJSJpn7q2yS8JC5UDERrScot/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>SSG 08</strong>
			<span>Темная вода</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=SSG%2008%20%7C%20%D0%9A%D0%BE%D0%B3%D1%82%D0%B8" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oJ-TlaAhkZzvREqcOBMoz-QXjGzMz5PhuUdO_4rZIcVm64dPDZuV6ZI1OF8iEXKfVNF2r704_0fMOJsaK8S3r2n_pOmZeCQ2rpDxk_ln28Q/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>SSG 08</strong>
			<span>Когти</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Sawed-Off%20%7C%20%D0%9E%D1%80%D0%B8%D0%B3%D0%B0%D0%BC%D0%B8" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oNfSwNDhhdDvBFJ9NXeI_8AfqDxg9-s5kVdq_yLYDLVWq6ZzPOuR5M4oZH8KBWfGPNwyouEI50qRdL5KK8Xzpjinsb2xZX0Xj-z5ShqbZ7Rh0ERld/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Sawed-Off</strong>
			<span>Оригами</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Tec-9%20%7C%20%D0%A1%D0%B8%D0%BD%D0%B8%D0%B9%20%D1%82%D0%B8%D1%82%D0%B0%D0%BD" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5vMeDsDzZpTRDLFaFQVeA3p1j6Nis77893GoDgp-xeeQrqtoHDYrklNowaF8HYXqSAbg3870Js1vQIKMDf837q3i33ejBdY11STUA/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Tec-9</strong>
			<span>Синий титан</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Tec-9%20%7C%20%D0%90%D0%B9%D0%B7%D0%B5%D0%BA" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5vMeDsDzRyTRDHAvlhXeYz_QXjHxg_7cNqQdr4o-xTKgm7tobOYrUrZt4aHJHYU6TQZVj0vxg_ifBULMGN9ivqiH-9OHBKBUQ9rY3UNg/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Tec-9</strong>
			<span>Айзек</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=Tec-9%20%7C%20%D0%9F%D0%B5%D1%81%D1%87%D0%B0%D0%BD%D0%B0%D1%8F%20%D0%B1%D1%83%D1%80%D1%8F" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5vMeDsDzRyTRDHAvlhT_Q08Bv4BjU_18pmUN6j-vVVcVrsstbFMrZ6MIxJF8CGDKODZg34vxo8hqhce5yNoyq71CTqaT1bRVO1rS5Tnr7s/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>Tec-9</strong>
			<span>Песчаная буря</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=UMP-45%20%7C%20%D0%9F%D0%BB%D0%B0%D0%BC%D1%8F" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo7e1f1Jf0vL3dzFD4dmlq4yCkP_gfeuCxTMG7pFw2uiV9I-jjlHi-0dvZDygLY-dJw89NQ3QqFK3lOe9jcSi_MOeUg1XNk4/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>UMP-45</strong>
			<span>Пламя</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=UMP-45%20%7C%20%D0%93%D1%80%D1%83%D0%B4%D0%B0%20%D0%BA%D0%BE%D1%81%D1%82%D0%B5%D0%B9" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQh0YjvRCrVSUMo-_QnrGyY_18VxVcG5yLYDLVWq6ZzCZrklY9pKTsmEDP6FYgCo6x84iPILepKApSjq3X_gMm0KDULp_mJQhqbZ7du2QWlm/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>UMP-45</strong>
			<span>Груда костей</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=UMP-45%20%7C%20%D0%9A%D0%B0%D0%BF%D1%80%D0%B0%D0%BB" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQhkZzvXDLBhX_oo5Af-CCsN5cJnXcK7uelXKwq85dDFNOUuNtseHcWGWPCOYQmsuRhrhvcIe8eJ8ny91CvhaGcUG028PIklS1Q/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>UMP-45</strong>
			<span>Капрал</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=UMP-45%20%7C%20%D0%97%D0%B0%D0%B1%D0%BB%D1%83%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQh0YjvXDLAKCco-uR7lGi495tRcWdKy_q4LZ167s9eQNuMtZdpJG8DWW6PTNAz-7U841vVYJsDYpCu-jHvtO2YPUxX1ujVT46Q6Aqs/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>UMP-45</strong>
			<span>Заблуждение</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=UMP-45%20%7C%20%D0%9B%D0%B0%D0%B1%D0%B8%D1%80%D0%B8%D0%BD%D1%82" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQhvazvOCK5bT8o15gniDiIN5cJnXcK7ue5Xf1nusYbONeQpNYpIFsPYWf7SZF30409pgqALfZHb9Cnoi3m8O2wUG028C02LLjw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>UMP-45</strong>
			<span>Лабиринт</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=UMP-45%20%7C%20%D0%91%D1%83%D0%BD%D1%82" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQhkZzvXDLAKCcov5BrjCDUN5cJnXcK7ue9RLw--vdfGO7IvON9ETpGCDKeEYgmrvEppgvRcfZSJpi263S-8OmwUG02867JdrUw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>UMP-45</strong>
			<span>Бунт</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=USP-S%20%7C%20%D0%9A%D1%80%D0%BE%D0%B2%D0%B0%D0%B2%D1%8B%D0%B9%20%D1%82%D0%B8%D0%B3%D1%80" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhVOwF5g3oHS417dVcWdKy_q4LZwvnt9GXMbAkYdtFTsDSDqSEbwn67kM-gqdUJsPc9Hnu3H66Mm8IUkH1ujVTCd6Qdhg/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>USP-S</strong>
			<span>Кровавый тигр</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=USP-S%20%7C%20%D0%9D%D0%B5%D1%80%D0%B6%D0%B0%D0%B2%D0%B5%D0%B9%D0%BA%D0%B0" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhXeQF4Rv8NjQm6c5tWNKl5IQLLFi28d_YYbgsOY1ITJXRXqSFZlj7vxlph6heL8Pc9Xy8iS3uPj0IDkLo8jkCzfjH5OVrFrrFFw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>USP-S</strong>
			<span>Нержавейка</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=USP-S%20%7C%20%D0%97%D0%B0%D0%BA%D1%80%D1%83%D1%87%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhX-AF4Rv8Njcg58BxUcSl_q05JFm77cebLbd_OdlPH8CFW_GEZwmu7x9phfMJLMTfpi--jnjvb24CCULvq2MEzrWZ-uw8ZTeUj80/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>USP-S</strong>
			<span>Закрученный</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=XM1014%20%7C%20%D0%A0%D1%82%D1%83%D1%82%D1%8C" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5jObLlYWNYcxX9Ga0PDKRuyxvlDisz18pmUN6j-vUHLF26tYHHZbV6Yo5OG8jXWvTTMFv67k5t1aYOfpXco3zsjCu4bmsLRVO1raEbYWX1/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>XM1014</strong>
			<span>Ртуть</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=XM1014%20%7C%20%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D1%8B%D0%B9%20%D0%BF%D0%B8%D1%82%D0%BE%D0%BD" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5jObLlYWNYeh39Eq5fV_Ap_wHiNjU37PhuUdO_4rZILw-9t4OUM-MuZotFGpOFDPLXYw3_7UprgakILMSBqCnn2n-7b20JXw2rpDwV-u7dEw/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>XM1014</strong>
			<span>Красный питон</span>
		</div>
	</div></a>
	
					
						
		<a href="https://csgo.tm/?search=XM1014%20%7C%20%D0%A1%D0%BA%D1%83%D0%BC%D0%B1%D1%80%D0%B8%D1%8F" class="item-incase milspec" target="_blank" style="text-decoration: none;">
	<div class="picture">
		<img src="http://cdn.cscard.ru/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgporrf0e1Y07PLZTiVPvYznwL-YlOL5ManYl1Rc7cF4n-SP8NSkjgHkr0c4Nm_7I9eTegVsaAnR8wW6l-u9gZO17Z6czyEw7Cdz5GGdwULtYoCFYg/160fx120f/image.png" alt="Дроп">
		
		

		<div class="descr">
			<strong>XM1014</strong>
			<span>Скумбрия</span>
		</div>
	</div></a>
	
					
				</div>
			</div>
	
	<script>
	
	(function(w) {
  if (w.fastXDM) return;

  var handlers = {};
  var onEnvLoad = [];
  var env = {};

// Key generation
  function genKey() {
    var key = '';
    for (i=0;i<5;i++) key += Math.ceil(Math.random()*15).toString(16);
    return key;
  }

  function waitFor(obj, prop, func, self,  count) {
    if (obj[prop]) {
      func.apply(self);
    } else {
      count = count || 0;
      if (count < 1000) setTimeout(function() {
        waitFor(obj, prop, func, self, count + 1)
      }, 0);
    }
  }

  function attachScript(url) {
    setTimeout(function() {
      var newScript = document.createElement('script');
      newScript.type = 'text/javascript';
      newScript.src = url || w.fastXDM.helperUrl;
      waitFor(document, 'body', function() {
        document.getElementsByTagName('HEAD')[0].appendChild(newScript);
      });
    }, 0);
  }

  function walkVar(value, clean) {
    switch (typeof value) {
      case 'string':
        if (clean) {
          return value.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#039;');
        }
        return value.replace(/&#039;/g, '\'').replace(/&quot;/g, '"').replace(/&gt;/g, '>').replace(/&lt;/g, '<').replace(/&amp;/g, '&');

      case 'object':
        if (Object.prototype.toString.apply(value) === '[object Array]') {
          newValue = [];
          for (var i = 0; i < value.length; i++) {
            newValue[i] = walkVar(value[i], clean);
          }
        } else {
          for (var k in value) {
            newValue = {};
            if (Object.hasOwnProperty.call(value, k)) {
              newValue[k] = walkVar(value[k], clean);
            }
          }
        }
      default:
        newValue = value;
    }

    return newValue;
  }

// Env functions
  function getEnv(callback, self) {
    if (env.loaded) {
      callback.apply(self, [env]);
    } else {
      onEnvLoad.push([self, callback]);
    }
  }

  function envLoaded() {
    env.loaded = true;
    var i = onEnvLoad.length;
    while (i--) {
      onEnvLoad[i][1].apply(onEnvLoad[i][0], [env]);
    }
  }

  function applyMethod(strData, self) {
    getEnv(function(env) {
      var data = env.json.parse(strData);
      if (data[0]) {
        if (!data[1]) data[1] = [];
        var i = data[1].length;
        while (i--) {
          if (data[1][i]._func) {
            var funcNum = data[1][i]._func;
            data[1][i] = function() {
              var args = Array.prototype.slice.call(arguments);
              args.unshift('_func'+funcNum);
              self.callMethod.apply(self, args);
            }
          } else if (self.options.safe) {
            data[1][i] = walkVar(data[1][i], true);
          }
        }
        setTimeout(function() {
          if (!self.methods[data[0]]) {
            throw Error('fastXDM: Method ' + data[0] + ' is undefined');
          }
          self.methods[data[0]].apply(self, data[1]);
        }, 0);
      }
    });
  }

// XDM object
  w.fastXDM = {
    _id: 0,
    helperUrl: ((location.protocol === 'https:') ? 'https:' : 'http:') + '//vk.com/js/api/xdmHelper.js',

    Server: function(methods, filter, options) {
      this.methods = methods || {};
      this.id = w.fastXDM._id++;
      this.options = options || {};
      this.filter = filter;
      this.key = genKey();
      this.methods['%init%'] = this.methods.__fxdm_i = function() {
        w.fastXDM.run(this.id);
        if (this.methods.onInit) this.methods.onInit();
      };
      this.frameName = 'fXD'+this.key;
      this.server = true;
      handlers[this.key] = [applyMethod, this];
    },

    Client: function(methods, options) {
      this.methods = methods || {};
      this.id = w.fastXDM._id++;
      this.options = options || {};
      w.fastXDM.run(this.id);
      if (window.name.indexOf('fXD') === 0) {
        this.key = window.name.substr(3);
      } else {
        throw Error('Wrong window.name property.');
      }
      this.caller = window.parent;
      handlers[this.key] = [applyMethod, this];
      this.client = true;

      w.fastXDM.on('helper', function() {
        w.fastXDM.onClientStart(this);
      }, this);

      getEnv(function(env) {
        env.send(this, env.json.stringify(['%init%']));
        var methods = this.methods;
        setTimeout(function() {
          if (methods.onInit) methods.onInit();
        }, 0);
      }, this);
    },

    onMessage: function(e) {
      if (!e.data) return false;
      var data = e.data;
      if (typeof data != 'string' && !(data instanceof String)) return false;
      var key = data.substr(0, 5);
      if (handlers[key]) {
        var self = handlers[key][1];
        if (self && (!self.filter || self.filter(e.origin))) {
          handlers[key][0](e.data.substr(6), self);
        }
      }
    },

    setJSON: function(json) {
      env.json = json;
    },

    getJSON: function(callback) {
      if (!callback) return env.json;
      getEnv(function(env) {
        callback(env.json);
      });
    },

    setEnv: function(exEnv) {
      var i;
      for (i in exEnv) {
        env[i] = exEnv[i];
      }
      envLoaded();
    },

    _q: {},

    on: function(key, act, self) {
      if (!this._q[key]) this._q[key] = [];
      if (this._q[key] == -1) {
        act.apply(self);
      } else {
        this._q[key].push([act, self]);
      }
    },

    run: function(key) {
      var len = (this._q[key] || []).length;
      if (this._q[key] && len > 0) {
        for (var i = 0; i < len; i++) this._q[key][i][0].apply(this._q[key][i][1]);
      }
      this._q[key] = -1;
    },

    waitFor: waitFor
  }

  w.fastXDM.Server.prototype.start = function(obj, count) {
    if (obj.contentWindow) {
      this.caller = obj.contentWindow;
      this.frame = obj;

      w.fastXDM.on('helper', function() {
        w.fastXDM.onServerStart(this);
      }, this);

    } else { // Opera old versions
      var self = this;
      count = count || 0;
      if (count < 50) setTimeout(function() {
        self.start.apply(self, [obj, count+1]);
      }, 100);
    }
  }

  w.fastXDM.Server.prototype.destroy = function() {
    handlers.splice(handlers.indexOf(this.key), 1);
  }

  function extend(obj1, obj2){
    for (var i in obj2) {
      if (obj1[i] && typeof(obj1[i]) == 'object') {
        extend(obj1[i], obj2[i])
      } else {
        obj1[i] = obj2[i];
      }
    }
  }

  w.fastXDM.Server.prototype.append = function(obj, options) {
    var div = document.createElement('DIV');
    div.innerHTML = '<iframe name="'+this.frameName+'" ></iframe>';
    var frame = div.firstChild;
    var self = this;
    setTimeout(function() {
      frame.frameBorder = '0';
      if (options) extend(frame, options);
      obj.insertBefore(frame, obj.firstChild);
      self.start(frame);
    }, 0);
    return frame;
  }

  w.fastXDM.Client.prototype.callMethod = w.fastXDM.Server.prototype.callMethod = function() {
    var args = Array.prototype.slice.call(arguments);
    var method = args.shift();
    var i = args.length;
    while (i--) {
      if (typeof(args[i]) == 'function') {
        this.funcsCount = (this.funcsCount || 0) + 1;
        var func = args[i];
        var funcName = '_func' + this.funcsCount;
        this.methods[funcName] = function() {
          func.apply(this, arguments);
          delete this.methods[funcName];
        }
        args[i] = {_func: this.funcsCount};
      } else if (this.options.safe) {
        args[i] = walkVar(args[i], false);
      }
    }
    waitFor(this, 'caller', function() {
      w.fastXDM.on(this.id, function() {
        getEnv(function(env) {
          env.send(this, env.json.stringify([method, args]));
        }, this);
      }, this);
    }, this);
  }

  if (w.JSON && typeof(w.JSON) == 'object' && w.JSON.parse && w.JSON.stringify && w.JSON.stringify({a:[1,2,3]}).replace(/ /g, '') == '{"a":[1,2,3]}') {
    env.json = {parse: w.JSON.parse, stringify: w.JSON.stringify};
  } else {
    w.fastXDM._needJSON = true;
  }

// PostMessage cover
  if (w.postMessage) {
    env.protocol = 'p';
    env.send = function(xdm, strData) {
      var win = (xdm.frame ? xdm.frame.contentWindow : xdm.caller);
      win.postMessage(xdm.key+':'+strData, "*");
    }
    if (w.addEventListener) {
      w.addEventListener("message", w.fastXDM.onMessage, false);
    } else {
      w.attachEvent("onmessage", w.fastXDM.onMessage);
    }

    if (w.fastXDM._needJSON) {
      w.fastXDM._onlyJSON = true;
      attachScript();
    } else {
      envLoaded();
    }
  } else {
    attachScript();
  }

})(window);


if (!window.VK) window.VK = {};


/*
 * Based on JavaScript implementation of the RSA Data Security, Inc. MD5 Message
 * Copyright (C) Paul Johnston 1999 - 2009
 * Other contributors: Greg Holt, Andrew Kepert, Ydnar, Lostinet
 * Distributed under the BSD License
 */
if(!VK.MD5){VK.MD5=function(n){var j=function(o,r){var q=(o&65535)+(r&65535),p=(o>>16)+(r>>16)+(q>>16);return(p<<16)|(q&65535)},g=function(o,p){return(o<<p)|(o>>>(32-p))},k=function(w,r,p,o,v,u){return j(g(j(j(r,w),j(o,u)),v),p)},a=function(q,p,w,v,o,u,r){return k((p&w)|((~p)&v),q,p,o,u,r)},h=function(q,p,w,v,o,u,r){return k((p&v)|(w&(~v)),q,p,o,u,r)},c=function(q,p,w,v,o,u,r){return k(p^w^v,q,p,o,u,r)},m=function(q,p,w,v,o,u,r){return k(w^(p|(~v)),q,p,o,u,r)},b=function(A,u){var z=1732584193,y=-271733879,w=-1732584194,v=271733878,r,q,p,o;A[u>>5]|=128<<((u)%32);A[(((u+64)>>>9)<<4)+14]=u;for(var t=0,s=A.length;t<s;t+=16){r=z;q=y;p=w;o=v;z=a(z,y,w,v,A[t+0],7,-680876936);v=a(v,z,y,w,A[t+1],12,-389564586);w=a(w,v,z,y,A[t+2],17,606105819);y=a(y,w,v,z,A[t+3],22,-1044525330);z=a(z,y,w,v,A[t+4],7,-176418897);v=a(v,z,y,w,A[t+5],12,1200080426);w=a(w,v,z,y,A[t+6],17,-1473231341);y=a(y,w,v,z,A[t+7],22,-45705983);z=a(z,y,w,v,A[t+8],7,1770035416);v=a(v,z,y,w,A[t+9],12,-1958414417);w=a(w,v,z,y,A[t+10],17,-42063);y=a(y,w,v,z,A[t+11],22,-1990404162);z=a(z,y,w,v,A[t+12],7,1804603682);v=a(v,z,y,w,A[t+13],12,-40341101);w=a(w,v,z,y,A[t+14],17,-1502002290);y=a(y,w,v,z,A[t+15],22,1236535329);z=h(z,y,w,v,A[t+1],5,-165796510);v=h(v,z,y,w,A[t+6],9,-1069501632);w=h(w,v,z,y,A[t+11],14,643717713);y=h(y,w,v,z,A[t+0],20,-373897302);z=h(z,y,w,v,A[t+5],5,-701558691);v=h(v,z,y,w,A[t+10],9,38016083);w=h(w,v,z,y,A[t+15],14,-660478335);y=h(y,w,v,z,A[t+4],20,-405537848);z=h(z,y,w,v,A[t+9],5,568446438);v=h(v,z,y,w,A[t+14],9,-1019803690);w=h(w,v,z,y,A[t+3],14,-187363961);y=h(y,w,v,z,A[t+8],20,1163531501);z=h(z,y,w,v,A[t+13],5,-1444681467);v=h(v,z,y,w,A[t+2],9,-51403784);w=h(w,v,z,y,A[t+7],14,1735328473);y=h(y,w,v,z,A[t+12],20,-1926607734);z=c(z,y,w,v,A[t+5],4,-378558);v=c(v,z,y,w,A[t+8],11,-2022574463);w=c(w,v,z,y,A[t+11],16,1839030562);y=c(y,w,v,z,A[t+14],23,-35309556);z=c(z,y,w,v,A[t+1],4,-1530992060);v=c(v,z,y,w,A[t+4],11,1272893353);w=c(w,v,z,y,A[t+7],16,-155497632);y=c(y,w,v,z,A[t+10],23,-1094730640);z=c(z,y,w,v,A[t+13],4,681279174);v=c(v,z,y,w,A[t+0],11,-358537222);w=c(w,v,z,y,A[t+3],16,-722521979);y=c(y,w,v,z,A[t+6],23,76029189);z=c(z,y,w,v,A[t+9],4,-640364487);v=c(v,z,y,w,A[t+12],11,-421815835);w=c(w,v,z,y,A[t+15],16,530742520);y=c(y,w,v,z,A[t+2],23,-995338651);z=m(z,y,w,v,A[t+0],6,-198630844);v=m(v,z,y,w,A[t+7],10,1126891415);w=m(w,v,z,y,A[t+14],15,-1416354905);y=m(y,w,v,z,A[t+5],21,-57434055);z=m(z,y,w,v,A[t+12],6,1700485571);v=m(v,z,y,w,A[t+3],10,-1894986606);w=m(w,v,z,y,A[t+10],15,-1051523);y=m(y,w,v,z,A[t+1],21,-2054922799);z=m(z,y,w,v,A[t+8],6,1873313359);v=m(v,z,y,w,A[t+15],10,-30611744);w=m(w,v,z,y,A[t+6],15,-1560198380);y=m(y,w,v,z,A[t+13],21,1309151649);z=m(z,y,w,v,A[t+4],6,-145523070);v=m(v,z,y,w,A[t+11],10,-1120210379);w=m(w,v,z,y,A[t+2],15,718787259);y=m(y,w,v,z,A[t+9],21,-343485551);z=j(z,r);y=j(y,q);w=j(w,p);v=j(v,o)}return[z,y,w,v]},f=function(r){var q="",s=-1,p=r.length,o,t;while(++s<p){o=r.charCodeAt(s);t=s+1<p?r.charCodeAt(s+1):0;if(55296<=o&&o<=56319&&56320<=t&&t<=57343){o=65536+((o&1023)<<10)+(t&1023);s++}if(o<=127){q+=String.fromCharCode(o)}else{if(o<=2047){q+=String.fromCharCode(192|((o>>>6)&31),128|(o&63))}else{if(o<=65535){q+=String.fromCharCode(224|((o>>>12)&15),128|((o>>>6)&63),128|(o&63))}else{if(o<=2097151){q+=String.fromCharCode(240|((o>>>18)&7),128|((o>>>12)&63),128|((o>>>6)&63),128|(o&63))}}}}}return q},e=function(p){var o=Array(p.length>>2),r,q;for(r=0,q=o.length;r<q;r++){o[r]=0}for(r=0,q=p.length*8;r<q;r+=8){o[r>>5]|=(p.charCodeAt(r/8)&255)<<(r%32)}return o},l=function(p){var o="";for(var r=0,q=p.length*32;r<q;r+=8){o+=String.fromCharCode((p[r>>5]>>>(r%32))&255)}return o},d=function(o){return l(b(e(o),o.length*8))},i=function(q){var t="0123456789abcdef",p="",o;for(var s=0,r=q.length;s<r;s++){o=q.charCodeAt(s);p+=t.charAt((o>>>4)&15)+t.charAt(o&15)}return p};return i(d(f(n)))}}

/*
 * VKontakte Open API JavaScript library
 * http://vk.com/
 */

VK.extend = function(target, source, overwrite) {
  for (var key in source) {
    if (overwrite || typeof target[key] === 'undefined') {
      target[key] = source[key];
    }
  }
  return target;
};

if (VK._protocol !== 'https:') {
  VK._protocol = ((location.protocol === 'https:') ? 'https:' : 'http:');
}

if (!VK.xdConnectionCallbacks) {

  VK.extend(VK, {
    version: 1,
    _apiId: null,
    _session: null,
    _userStatus: 'unknown',
    _domain: {
      main: 'https://oauth.vk.com/',
      api: 'https://api.vk.com/'
    },
    _path: {
      login: 'authorize',
      proxy: 'fxdm_oauth_proxy.html'
    },
    _rootId: 'vk_api_transport',
    _nameTransportPath: '',
    xdReady: false,
    access: {
      FRIENDS:   0x2,
      PHOTOS:    0x4,
      AUDIO:     0x8,
      VIDEO:     0x10,
      MATCHES:   0x20,
      QUESTIONS: 0x40,
      WIKI:      0x80
    }
  });

  VK.init = function(options) {
    var body, root;

    VK._apiId = null;
    if (!options.apiId) {
      throw Error('VK.init() called without an apiId');
    }
    VK._apiId = options.apiId;

    if (options.onlyWidgets) return true;

    if (options.nameTransportPath && options.nameTransportPath !== '') {
      VK._nameTransportPath = options.nameTransportPath;
    }

    root = document.getElementById(VK._rootId);
    if (!root) {
      root = document.createElement('div');
      root.id = VK._rootId;
      body = document.getElementsByTagName('body')[0];
      body.insertBefore(root, body.childNodes[0]);
    }
    root.style.position = 'absolute';
    root.style.top = '-10000px';

    var session = VK.Cookie.load();
    if (session) {
      VK.Auth._loadState = 'loaded';
      VK.Auth.setSession(session, session ? 'connected' : 'unknown');
    }
  };

  if (!VK.Cookie) {
    VK.Cookie = {
      _domain: null,
      load: function() {
        var
            cookie = document.cookie.match('\\bvk_app_' + VK._apiId + '=([^;]*)\\b'),
            session;

        if (cookie) {
          session = this.decode(cookie[1]);
          if (session.secret != 'oauth') {
            return false;
          }
          session.expire = parseInt(session.expire, 10);
          VK.Cookie._domain = '.' + window.location.hostname;//session.base_domain;
        }

        return session;
      },
      setRaw: function(val, ts, domain, time) {
        var rawCookie;
        rawCookie = 'vk_app_' + VK._apiId + '=' + val + '';
        var exp = time ? (new Date().getTime() + time * 1000) : ts * 1000;
        rawCookie += (val && ts === 0 ? '' : '; expires=' + new Date(exp).toGMTString());
        rawCookie += '; path=/';
        rawCookie += (domain ? '; domain=.' + domain : '');
        document.cookie = rawCookie;

        this._domain = domain;
      },
      set: function(session, resp) {
        if (session) {
          this.setRaw(this.encode(session), session.expire, window.location.hostname, (resp || {}).time);
        } else {
          this.clear();
        }
      },
      clear: function() {
        this.setRaw('', 0, this._domain, 0);
      },
      encode: function(params) {
        var
            pairs = [],
            key;

        for (key in params) {
          if (key != 'user') pairs.push(encodeURIComponent(key) + '=' + encodeURIComponent(params[key]));
        }
        pairs.sort();

        return pairs.join('&');
      },
      decode: function(str) {
        var
            params = {},
            parts = str.split('&'),
            i,
            pair;

        for (i=0; i < parts.length; i++) {
          pair = parts[i].split('=', 2);
          if (pair && pair[0]) {
            params[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
          }
        }

        return params;
      }
    };
  }

  if (!VK.Api) {
    VK.Api = {
      _headId: null,
      _callbacks: {},

      ie6_7: function() {
        if (!VK.Api.ieTested) {
          VK.Api.isIE6_7 = navigator.userAgent.match(/MSIE [6|7]/i);
          VK.Api.ieTested = true;
        }
        return VK.Api.isIE6_7;
      },

      supportCORS: function() {
        var xhr = new XMLHttpRequest();
        if ("withCredentials" in xhr) {
          return true;
        }

        if (typeof XDomainRequest != "undefined") {
          return true;
        }

        return false;
      },

      makeRequest: function(url, cb) {
        var xhr = VK.Api.createRequest('GET', url);
        if (!xhr) {
          return false;
        }

        xhr.onload = function() {
          var text = xhr.responseText;
          if (xhr.status === 200) {
            cb(text);
          } else {
            try {
              console.error('Open api access error', xhr.response);
            } catch(e) {
              //nop
            }
          }
        };

        xhr.onerror = function() {
          try {
            console.error('Open api access error');
          } catch(e) {
            //nop
          }
        };

        xhr.send();
        return true;
      },

      createRequest: function(method, url) {
        var xhr = new XMLHttpRequest();

        if ("withCredentials" in xhr) {
          // XHR for Chrome/Firefox/Opera/Safari.
          xhr.open(method, url, true);
          xhr.withCredentials = true;
        } else if (typeof XDomainRequest != "undefined") {
          // XDomainRequest for IE.
          xhr = new XDomainRequest();
          xhr.open(method, url);
          xhr.withCredentials = true;
        } else {
          // CORS not supported.
          xhr = null;
        }

        return xhr;
      },

      attachScript: function(url) {
        if (!VK.Api._headId) VK.Api._headId = document.getElementsByTagName("head")[0];
        var newScript = document.createElement('script');
        newScript.type = 'text/javascript';
        newScript.setAttribute('encoding', 'UTF-8');
        newScript.src = url;
        VK.Api._headId.appendChild(newScript);
      },

      checkMethod: function(method, params, cb, queryTry) {
        var m = method.toLowerCase();
        if (m == 'wall.post' || m == 'activity.set') {
          var text = (m == 'activity.set') ? params.text : params.message;
          if (!text) {
            text = '';
          }
          var query =  VK._protocol + '//vk.com/al_apps.php?act=wall_post_box&widget=1&method='+m+'&aid=' + parseInt(VK._apiId, 10) + '&text=' + encodeURIComponent(text);
          if (m == 'wall.post') {
            query += '&owner_id=' + parseInt(params.owner_id || 0, 10) + '&attachments=' + (params.attachments || params.attachment || '') + '&publish_date=' + (params.publish_date || '');
          }
          var method_access = '_'+(Math.random()).toString(16).substr(2);
          query += '&method_access='+method_access;
          var popup = VK.UI.popup({
            url: query,
            width: 460,
            height: 249
          });
          var timer = setInterval(function() {
            if (VK.UI.active.closed) {
              clearInterval(timer);
              params.method_access = method_access;
              VK.Api.call(method, params, cb, queryTry);
            }
          }, 500);
          return false;
        }
        return true;
      },

      call: function(method, params, cb, queryTry) {
        var
            query = params || {},
            qs,
            responseCb;

        if (typeof query != 'object' || typeof cb != 'function') {
          return false;
        }
        if (!params.method_access && !params.method_force && !VK.Api.checkMethod(method, params, cb, queryTry)) {
          return;
        }

        if (!queryTry) queryTry = 0;

        if (VK.Auth._loadState != 'loaded') {
          var authFunc = function(result) {
            if (result && result.session) {
              VK.Observer.unsubscribe('auth.loginStatus', authFunc);
              VK.Api.call(method, params, cb);
            }
          };
          VK.Observer.subscribe('auth.loginStatus', authFunc);
          VK.Auth.getLoginStatus();
          return;
        }

        if (VK.Api.queryLength(query) < 1500 && !VK.Api.ie6_7()) {
          var useXDM = false;
          var rnd = parseInt(Math.random() * 10000000, 10);
          while (VK.Api._callbacks[rnd]) {
            rnd = parseInt(Math.random() * 10000000, 10)
          }
          query.callback = 'VK.Api._callbacks['+rnd+']';
        } else {
          var useXDM = true;
        }

        if (VK._session && VK._session.sid) {
          query.access_token = VK._session.sid;
        }

        qs = VK.Cookie.encode(query);

        responseCb = function(response) {
          if (response.error && (response.error.error_code == 3 || response.error.error_code == 4 || response.error.error_code == 5)) {
            if (queryTry > 3) return false;
            var repeatCall = function(resp) {
              VK.Observer.unsubscribe('auth.sessionChange', repeatCall);
              delete params.access_token;
              if (resp.session) VK.Api.call(method, params, cb, queryTry + 1);
            }
            VK.Observer.subscribe('auth.sessionChange', repeatCall);
            VK.Auth.getLoginStatus();
          } else {
            cb(response);
          }
          if (!useXDM) delete VK.Api._callbacks[rnd];
        };

        if (useXDM) {
          if (VK.xdReady) {
            VK.XDM.remote.callMethod('apiCall', method, qs, responseCb);
          } else {
            VK.Observer.subscribe('xdm.init', function() {
              VK.XDM.remote.callMethod('apiCall', method, qs, responseCb);
            });
            VK.XDM.init();
          }
        } else {
          VK.Api._callbacks[rnd] = responseCb;
          VK.Api.attachScript(VK._domain.api + 'method/' + method +'?' + qs);
        }
      },

      queryLength: function(query) {
        var len = 100, i; // sid + sig
        for (i in query) {
          len += i.length + encodeURIComponent(query[i]).length + 1;
        }
        return len;
      }
    };

// Alias
    VK.api = function(method, params, cb) {VK.Api.call(method, params, cb);}
  };

  if (!VK.Auth) {
    VK.Auth = {
      popup: null,
      lsCb: {},

      setSession: function(session, status, settings, resp) {
        var
            login = !VK._session && session,
            logout = VK._session && !session,
            both = VK._session && session && VK._session.mid != session.mid,
            sessionChange = login || logout || (VK._session && session && VK._session.sid != session.sid),
            statusChange = status != VK._userStatus,
            response = {
              'session': session,
              'status': status,
              'settings': settings
            };

        VK._session = session;

        VK._userStatus = status;

        VK.Cookie.set(session, resp);

        if (sessionChange || statusChange || both) {
          setTimeout(function() {
            if (statusChange) {
              VK.Observer.publish('auth.statusChange', response);
            }

            if (logout || both) {
              VK.Observer.publish('auth.logout', response);
            }

            if (login || both) {
              VK.Observer.publish('auth.login', response);
            }

            if (sessionChange) {
              VK.Observer.publish('auth.sessionChange', response);
            }
          }, 0);
        }

        return response;
      },

      // Public VK.Auth methods
      login: function(cb, settings) {
        if (!VK._apiId) {
          return false;
        }

        var url = VK._domain.main + VK._path.login + '?client_id='+VK._apiId+'&display=popup&redirect_uri=close.html&response_type=token';
        if (settings && parseInt(settings, 10) > 0) {
          url += '&scope=' + settings;
        }

        VK.Observer.unsubscribe('auth.onLogin');
        VK.Observer.subscribe('auth.onLogin', cb);

        VK.UI.popup({
          width: 665,
          height: 370,
          url: url
        });

        var authCallback = function() {
          VK.Auth.getLoginStatus(function(resp) {
            VK.Observer.publish('auth.onLogin', resp);
            VK.Observer.unsubscribe('auth.onLogin');
          }, true);
        }

        VK.UI.popupOpened = true;
        var popupCheck = function() {
          if (!VK.UI.popupOpened) {
            return false;
          }

          try {
            if (!VK.UI.active.top || VK.UI.active.closed) {
              VK.UI.popupOpened = false;
              authCallback();
              return true;
            }
          } catch(e) {
            VK.UI.popupOpened = false;
            authCallback();
            return true;
          }
          setTimeout(popupCheck, 100);
        };

        setTimeout(popupCheck, 100);
      },

      // Logout user from app, vk.com & login.vk.com
      logout: function(cb) {
        VK.Auth.revokeGrants(cb);
      },

      revokeGrants: function(cb) {
        var onLogout = function(resp) {
          VK.Observer.unsubscribe('auth.statusChange', onLogout);
          if (cb) {
            cb(resp);
          }
        }

        VK.Observer.subscribe('auth.statusChange', onLogout);
        if (VK._session && VK._session.sid) {
          var url = 'https://login.vk.com/?act=openapi&oauth=1&aid=' + parseInt(VK._apiId, 10) + '&location=' + encodeURIComponent(window.location.hostname) + '&do_logout=1&token=' + VK._session.sid;
          if (VK.Api.supportCORS()) {
            var logoutCallback = function() {
              VK.Auth.setSession(null, 'unknown');
            };

            VK.Api.makeRequest(url + '&new=1', logoutCallback);
          } else {
            VK.Api.attachScript(url);
          }
        }

        VK.Cookie.clear();
      },

      // Get current login status from session (sync) (not use on load time)
      getSession: function() {
        return VK._session;
      },

      // Get current login status from vk.com (async)
      getLoginStatus: function(cb, force) {
        if (!VK._apiId) {
          return;
        }

        if (cb) {
          if (!force && VK.Auth._loadState == 'loaded') {
            cb({status: VK._userStatus, session: VK._session});
            return;
          } else {
            VK.Observer.subscribe('auth.loginStatus', cb);
          }
        }

        if (!force && VK.Auth._loadState == 'loading') {
          return;
        }

        VK.Auth._loadState = 'loading';

        var url = 'https://login.vk.com/?act=openapi&oauth=1&aid=' + parseInt(VK._apiId, 10) + '&location=' + encodeURIComponent(window.location.hostname);
        if (VK.Api.supportCORS()) {
          var loginCallback = function(response) {
            if (!this.JSON) {
              this.JSON = {};
            }

            if (typeof JSON.parse !== 'function') {
              //IE6 and IE7
              response = eval(response);
            } else {
              response = JSON.parse(response);
            }

            VK.Auth._loadState = 'loaded';
            if (response && response.auth) {
              var session = {
                mid: response.user.id,
                sid: response.access_token,
                sig: response.sig,
                secret: response.secret,
                expire: response.expire
              };

              if (force) {
                session.user = response.user;
              }

              var status = 'connected';
            } else {
              var session = null;
              var status = response.user ? 'not_authorized' : 'unknown';
              VK.Cookie.clear();
            }

            VK.Auth.setSession(session, status, false, response);
            VK.Observer.publish('auth.loginStatus', {session: session, status: status});
            VK.Observer.unsubscribe('auth.loginStatus');
          };

          VK.Api.makeRequest(url + '&new=1', loginCallback);
        } else {
          var rnd = parseInt(Math.random() * 10000000, 10);
          while (VK.Auth.lsCb[rnd]) {
            rnd = parseInt(Math.random() * 10000000, 10);
          }

          VK.Auth.lsCb[rnd] = function(response) {
            delete VK.Auth.lsCb[rnd];
            VK.Auth._loadState = 'loaded';
            if (response && response.auth) {
              var session = {
                mid: response.user.id,
                sid: response.access_token,
                sig: response.sig,
                secret: response.secret,
                expire: response.expire
              };
              if (force) session.user = response.user;
              var status = 'connected';
            } else {
              var session = null;
              var status = response.user ? 'not_authorized' : 'unknown';
              VK.Cookie.clear();
            }
            VK.Auth.setSession(session, status, false, response);
            VK.Observer.publish('auth.loginStatus', {session: session, status: status});
            VK.Observer.unsubscribe('auth.loginStatus');
          };

            // AttachScript here
          VK.Api.attachScript(url+'&rnd='+rnd);
        }
      }
    };
  }

} else { // if VK.xdConnectionCallbacks
  setTimeout(function() {
    var callback;
    while (callback = VK.xdConnectionCallbacks.pop()) {
      callback();
    }
  }, 0);
  if (VK.Widgets && !VK.Widgets._constructor) {
    VK.Widgets = false;
  }
}

if (!VK.UI) {
  VK.UI = {
    active: null,
    _buttons: [],
    popup: function(options) {
      var
          screenX = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft,
          screenY = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop,
          outerWidth = typeof window.outerWidth != 'undefined' ? window.outerWidth : document.body.clientWidth,
          outerHeight = typeof window.outerHeight != 'undefined' ? window.outerHeight : (document.body.clientHeight - 22),
          width = options.width,
          height = options.height,
          left = parseInt(screenX + ((outerWidth - width) / 2), 10),
          top = parseInt(screenY + ((outerHeight - height) / 2.5), 10),
          features = (
              'width=' + width +
              ',height=' + height +
              ',left=' + left +
              ',top=' + top
          );
      this.active = window.open(options.url, 'vk_openapi', features);
    },
    button: function(el, handler) {
      var html = '';

      if (typeof el == 'string') {
        el = document.getElementById(el);
      }


      this._buttons.push(el);
      index = this._buttons.length - 1;

      html = (
          '<table cellspacing="0" cellpadding="0" id="openapi_UI_' + index + '" onmouseover="VK.UI._change(1, ' + index + ');" onmouseout="VK.UI._change(0, ' + index + ');" onmousedown="VK.UI._change(2, ' + index + ');" onmouseup="VK.UI._change(1, ' + index + ');" style="cursor: pointer; border: 0px; font-family: tahoma, arial, verdana, sans-serif, Lucida Sans; font-size: 10px;"><tr style="vertical-align: middle">' +
          '<td><div style="border: 1px solid #3b6798;border-radius: 2px 0px 0px 2px;-moz-border-radius: 2px 0px 0px 2px;-webkit-border-radius: 2px 0px 0px 2px;"><div style="border: 1px solid #5c82ab; border-top-color: #7e9cbc; background-color: #6D8DB1; color: #fff; text-shadow: 0px 1px #45688E; height: 15px; padding: 2px 4px 0px 6px;line-height: 13px;">&#1042;&#1086;&#1081;&#1090;&#1080;</div></div></td>' +
          '<td><div style="background: url(' + VK._protocol + '//vk.com/images/btns.png) 0px -42px no-repeat; width: 21px; height: 21px"></div></td>' +
          '<td><div style="border: 1px solid #3b6798;border-radius: 0px 2px 2px 0px;-moz-border-radius: 0px 2px 2px 0px;-webkit-border-radius: 0px 2px 2px 0px;"><div style="border: 1px solid #5c82ab; border-top-color: #7e9cbc; background-color: #6D8DB1; color: #fff; text-shadow: 0px 1px #45688E; height: 15px; padding: 2px 6px 0px 4px;line-height: 13px;">&#1050;&#1086;&#1085;&#1090;&#1072;&#1082;&#1090;&#1077;</div></div></td>' +
          '</tr></table>'
      );
      el.innerHTML = html;
      el.style.width = el.childNodes[0].offsetWidth + 'px';
    },
    _change: function(state, index) {
      var row = document.getElementById('openapi_UI_' + index).rows[0];
      var elems = [row.cells[0].firstChild.firstChild, row.cells[2].firstChild.firstChild];
      for (var i = 0; i < 2; ++i) {
        var elem = elems[i];
        if (state === 0) {
          elem.style.backgroundColor = '#6D8DB1';
          elem.style.borderTopColor = '#7E9CBC';
          elem.style.borderLeftColor = elem.style.borderRightColor = elem.style.borderBottomColor = '#5C82AB';
        } else if (state == 1) {
          elem.style.backgroundColor = '#7693B6';
          elem.style.borderTopColor = '#88A4C4';
          elem.style.borderLeftColor = elem.style.borderRightColor = elem.style.borderBottomColor = '#6088B4';
        } else if (state == 2) {
          elem.style.backgroundColor = '#6688AD';
          elem.style.borderBottomColor = '#7495B8';
          elem.style.borderLeftColor = elem.style.borderRightColor = elem.style.borderTopColor = '#51779F';
        }
      }
      if (state === 0 || state == 2) {
        row.cells[2].firstChild.style.backgroundPosition = '0px -42px';
      } else if (state == 1) {
        row.cells[2].firstChild.style.backgroundPosition = '0px -63px';
      }
    }
  };
}

if (!VK.XDM) {
  VK.XDM = {
    remote: null,
    init: function() {
      if (this.remote) return false;
      var url = VK._domain.api + VK._path.proxy;
      this.remote = new fastXDM.Server({
        onInit: function() {
          VK.xdReady = true;
          VK.Observer.publish('xdm.init');
        }
      });

      this.remote.append(document.getElementById(VK._rootId), {
        src: url
      });
    },
    xdHandler: function(code) {
      try {
        eval('VK.' + code);
      } catch(e) {}
    }
  };
}

if (!VK.Observer) {
  VK.Observer = {
    _subscribers: function() {
      if (!this._subscribersMap) {
        this._subscribersMap = {};
      }
      return this._subscribersMap;
    },
    publish: function(eventName) {
      var
          args = Array.prototype.slice.call(arguments),
          eventName = args.shift(),
          subscribers = this._subscribers()[eventName],
          i, j;

      if (!subscribers) return;

      for (i = 0, j = subscribers.length; i < j; i++) {
        if (subscribers[i] != null) {
          subscribers[i].apply(this, args);
        }
      }
    },
    subscribe: function(eventName, handler) {
      var
          subscribers = this._subscribers();

      if (typeof handler != 'function') return false;

      if (!subscribers[eventName]) {
        subscribers[eventName] = [handler];
      } else {
        subscribers[eventName].push(handler);
      }
    },
    unsubscribe: function(eventName, handler) {
      var
          subscribers = this._subscribers()[eventName],
          i, j;

      if (!subscribers) return false;
      if (typeof handler == 'function') {
        for (i = 0, j = subscribers.length; i < j; i++) {
          if (subscribers[i] == handler) {
            subscribers[i] = null;
          }
        }
      } else {
        delete this._subscribers()[eventName];
      }
    }
  };
}

if (!VK.Widgets) {
  VK.Widgets = {};

  VK.Widgets.count = 0;
  VK.Widgets.RPC = {};

  VK.Widgets.loading = function(obj, enabled) {
    obj.style.background = enabled ? 'url("' + VK._protocol + '//vk.com/images/upload.gif") center center no-repeat transparent' : 'none';
  };

  VK.Widgets.Comments = function(objId, options, page) {
    var pData = VK.Util.getPageData();
    if (!VK._apiId) throw Error('VK not initialized. Please use VK.init');
    options = options || {};
    var params = {
      limit: options.limit || 10,
      height: options.height || 0,
      mini: options.mini === undefined ? 'auto' : options.mini,
      norealtime: options.norealtime ? 1 : 0
    }, mouseup = function() {
      rpc.callMethod('mouseUp');
      return false;
    }, move = function(event) {
      rpc.callMethod('mouseMove', {screenY: event.screenY});
    }, iframe, rpc;

    if (options.browse) { // browse all comments
      params.browse = 1;
      params.replies = options.replies || 0;
    } else { // page
      var url = options.pageUrl || pData.url;
      if (url.substr(0, 1) == '/') {
        url = (location.protocol + '//' + location.host) + url;
      }
      VK.extend(params, {
        page: page || 0,
        status_publish: options.autoPublish === undefined ? 1 : options.autoPublish,
        attach: options.attach === undefined ? '*' : (options.attach ? options.attach : ''),
        url: url,
        title: options.pageTitle || pData.title,
        description: options.pageDescription || pData.description,
        image: options.pageImage || pData.image
      });
    }
    if (options.onChange) { // DEPRECATED
      VK.Observer.subscribe('widgets.comments.new_comment', options.onChange);
      VK.Observer.subscribe('widgets.comments.delete_comment', options.onChange);
    }

    return VK.Widgets._constructor('widget_comments.php', objId, options, params, {
      showBox: function(url, props) {
        var box = VK.Util.Box((options.base_domain || VK._protocol + '//vk.com') + '/' + url, [], {
          proxy: function() {
            rpc.callMethod.apply(rpc, arguments);
          }
        });
        box.show();
      },
      startDrag: function() {
        cursorBack = window.document.body.style.cursor;
        window.document.body.style.cursor = 'pointer';
        VK.Util.addEvent('mousemove', move);
        VK.Util.addEvent('mouseup', mouseup);
      },
      stopDrag: function() {
        window.document.body.style.cursor = cursorBack;
        VK.Util.removeEvent('mousemove', move);
        VK.Util.removeEvent('mouseup', mouseup);
      }
    }, {
      startHeight: 133,
      minWidth: 300,
      width: '100%'
    }, function(o, i, r) {iframe = i; rpc = r;});
  };

  VK.Widgets.CommentsBrowse = function(objId, options) {
    options = options || {};
    options.browse = 1;
    return VK.Widgets.Comments(objId, options);
  };

  VK.Widgets.Recommended = function(objId, options) {
    var pData = VK.Util.getPageData();
    if (!VK._apiId) throw Error('VK not initialized. Please use VK.init');
    options = options || {};
    var params = {
      limit: options.limit || 5,
      max: options.max || 0,
      sort: options.sort || 'friend_likes',
      verb: options.verb || 0,
      period: options.period || 'week',
      target: options.target || 'parent'
    };
    return VK.Widgets._constructor('widget_recommended.php', objId, options, params, {}, {
      startHeight: (90 + params.limit * 30),
      minWidth: 150,
      width: '100%'
    });
  };

  VK.Widgets.Post = function(objId, ownerId, postId, hash, options) {
    options = options || {};
    var params = {
      owner_id: ownerId,
      post_id: postId,
      hash: hash || '',
      width: options.width || 500
    }, iframe, rpc, cursorBack;
    if (options.preview) {
      params.preview = 1;
      delete options['preview'];
    }
    return VK.Widgets._constructor('widget_post.php', objId, options, params, {
      showBox: function(url, props) {
        var box = VK.Util.Box((options.base_domain || VK._protocol + '//vk.com') + '/' + url, [], {
          proxy: function() {
            rpc.callMethod.apply(rpc, arguments);
          }
        });
        box.show();
      },
      startDrag: function() {
        cursorBack = window.document.body.style.cursor;
        window.document.body.style.cursor = 'pointer';
      },
      stopDrag: function() {
        window.document.body.style.cursor = cursorBack;
      }
    }, {
      startHeight: 90,
      minWidth: 250,
      width: '100%'
    }, function(o, i, r) {iframe = i; rpc = r;});
  };

  VK.Widgets.Like = function(objId, options, page) {
    var pData = VK.Util.getPageData();
    if (!VK._apiId) throw Error('VK not initialized. Please use VK.init');
    options = VK.extend(options || {}, {allowTransparency: true});
    if (options.type == 'button' || options.type == 'vertical' || options.type == 'mini') delete options.width;
    var
        type = (options.type == 'full' || options.type == 'button' || options.type == 'vertical' || options.type == 'mini') ? options.type : 'full',
        width = type == 'full' ? Math.max(200, options.width || 350) : (type == 'button' ? 180 : (type == 'mini' ? 100 : 41)),
        btnHeight = parseInt(options.height, 10) || 22,
        height = type == 'vertical' ? (2 * btnHeight + 7) : (type == 'full' ? btnHeight + 1 : btnHeight),
        params = {
          page: page || 0,
          url: options.pageUrl || pData.url,
          type: type,
          verb: options.verb == 1 ? 1 : 0,
          color: options.color || '',
          title: options.pageTitle || pData.title,
          description: options.pageDescription || pData.description,
          image: options.pageImage || pData.image,
          text: (options.text || '').substr(0, 140),
          h: btnHeight
        },
        ttHere = options.ttHere || false,
        isOver = false,
        obj, buttonIfr, buttonRpc, tooltipIfr, tooltipRpc, checkTO, statsBox;

    function showTooltip(force) {
      if ((!isOver && !force) || !tooltipRpc) return;
      if (!tooltipIfr || !tooltipRpc || tooltipIfr.style.display != 'none' && tooltipIfr.getAttribute('vkhidden') != 'yes') return;
      var scrollTop = options.getScrollTop ? options.getScrollTop() : (document.body.scrollTop || document.documentElement.scrollTop || 0);
      var objPos = VK.Util.getXY(obj, options.fixed);
      var startY = ttHere ? 0 : objPos[1];
      if (scrollTop > objPos[1] - 120 && options.tooltipPos != 'top' || type == 'vertical' || options.tooltipPos == 'bottom') {
        tooltipIfr.style.top = (startY + height + 2) + 'px';
        tooltipRpc.callMethod('show', false);
      } else {
        tooltipIfr.style.top = (startY - 125) + 'px';
        tooltipRpc.callMethod('show', true);
      }
      VK.Util.ss(tooltipIfr, {left: ((ttHere ? 0 : objPos[0]) - (type == 'vertical' || type == 'mini' ? 36 : 2)) + 'px', display: 'block', opacity: 1, filter: 'none'});
      tooltipIfr.setAttribute('vkhidden', 'no');
      isOver = true;
    }

    function hideTooltip(force) {
      if ((isOver && !force) || !tooltipRpc) return;
      tooltipRpc.callMethod('hide');
      buttonRpc.callMethod('hide');
      setTimeout(function() {
        tooltipIfr.style.display = 'none'
      }, 400);
    }

    function handleStatsBox(act) {
      hideTooltip(true);
      statsBox = VK.Util.Box(buttonIfr.src + '&act=a_stats_box&widget_width=620');
      statsBox.show();
    }

    return VK.Widgets._constructor('widget_like.php', objId, options, params, {
      initTooltip: function(counter) {
        tooltipRpc = new fastXDM.Server({
          onInit: counter ? function() {showTooltip(true)} : function() {},
          proxy: function() {
            buttonRpc.callMethod.apply(buttonRpc, arguments);
          },
          showBox: function(url, props) {
            var box = VK.Util.Box((options.base_domain || VK._protocol + '//vk.com/') + url, [props.width, props.height], {
              proxy: function() {
                tooltipRpc.callMethod.apply(tooltipRpc, arguments);
              }
            });
            box.show();
          },
          statsBox: handleStatsBox
        }, false, {safe: true});
        tooltipIfr = tooltipRpc.append(ttHere ? obj : document.body, {
          src: buttonIfr.src + '&act=a_like_tooltip',
          scrolling: 'no',
          allowTransparency: true,
          id: buttonIfr.id + '_tt',
          style: {position: 'absolute', padding: 0, display: 'block', opacity: 0.01, filter: 'alpha(opacity=1)', border: '0', width: '238px', height: '124px', zIndex: 5000, overflow: 'hidden'}
        });
        tooltipIfr.setAttribute('vkhidden', 'yes');

        obj.onmouseover = tooltipIfr.onmouseover = function() {
          clearTimeout(checkTO);
          isOver = true;
        };
        obj.onmouseout = tooltipIfr.onmouseout = function() {
          clearTimeout(checkTO);
          isOver = false;
          checkTO = setTimeout(function() {hideTooltip(); }, 200);
        };
      },
      statsBox: handleStatsBox,
      showTooltip: showTooltip,
      hideTooltip: hideTooltip,
      showBox: function(url, props) {
        var box = VK.Util.Box((options.base_domain || VK._protocol + '//vk.com/') + url, [], {
          proxy: function() {
            buttonRpc.callMethod.apply(buttonRpc, arguments);
          }
        });
        box.show();
      },
      proxy: function() {if (tooltipRpc) tooltipRpc.callMethod.apply(tooltipRpc, arguments);}
    }, {
      startHeight: height,
      minWidth: width
    }, function(o, i, r) {
      buttonRpc = r;
      VK.Util.ss(obj = o, {height: height + 'px', width: width + 'px', position: 'relative', clear: 'both'});
      VK.Util.ss(buttonIfr = i, {height: height + 'px', width: width + 'px', overflow: 'hidden', zIndex: 150});
    });
  };

  VK.Widgets.Poll = function(objId, options, pollId) {
    var pData = VK.Util.getPageData();
    // if (!VK._apiId) throw Error('VK not initialized. Please use VK.init');
    if (!pollId) throw Error('No poll id passed');
    options = options || {};
    var params = {
      poll_id: pollId,
      url: options.pageUrl || pData.url || location.href,
      title: options.pageTitle || pData.title,
      description: options.pageDescription || pData.description
    };
    return VK.Widgets._constructor('widget_poll.php', objId, options, params, {}, {
      startHeight: 133,
      minWidth: 300,
      width: '100%'
    });
  };

  VK.Widgets.PagePoll = function(objId, options, page) {
    var pData = VK.Util.getPageData();
    // if (!VK._apiId) throw Error('VK not initialized. Please use VK.init');
    options = options || {};
    var params = {
      page: page || 0,
      norealtime: options.norealtime ? 1 : 0,
      poll_id: options.pollId || '',
      url: options.pageUrl || pData.url || location.href,
      title: options.pageTitle || pData.title,
      description: options.pageDescription || pData.description
    };
    return VK.Widgets._constructor('al_widget_poll.php', objId, options, params, {}, {
      startHeight: 133,
      minWidth: 300,
      width: '100%'
    });
  };

  VK.Widgets.Community = VK.Widgets.Group = function(objId, options, gid) {
    gid = parseInt(gid, 10);
    var RPC;
    if (!gid) {
      throw Error('No group_id passed');
    }
    options.mode = parseInt(options.mode, 10).toString();
    var params = {
      gid: gid,
      mode: (options.mode) ? options.mode : '0'
    };
    if (!options.width) options.width = 200;
    if (options.wall) params.wall = options.wall;
    params.color1 = options.color1 || '';
    params.color2 = options.color2 || '';
    params.color3 = options.color3 || '';
    params.class_name = options.class_name || '';
    if (options.no_head) params.no_head = 1;
    if (!options.height) options.height = 290;
    if (options.wide) {
      params.wide = 1;
      if (options.width < 300) {
        options.width = 300;
      }
    }

    var cursorBack;

    function mouseup() {
      RPC.callMethod('mouseUp');
      return false;
    }

    function move(event) {
      RPC.callMethod('mouseMove', {screenY: event.screenY});
      return false;
    }

    return VK.Widgets._constructor('widget_community.php', objId, options, params, {
      showBox: function(url, props) {
        var box = VK.Util.Box((options.base_domain || VK._protocol + '//vk.com/') + url, [], {
          proxy: function() {
            rpc.callMethod.apply(rpc, arguments);
          }
        });
        box.show();
      },
      startDrag: function() {
        cursorBack = window.document.body.style.cursor;
        window.document.body.style.cursor = 'pointer';
        VK.Util.addEvent('mousemove', move);
        VK.Util.addEvent('mouseup', mouseup);
      },
      stopDrag: function() {
        window.document.body.style.cursor = cursorBack;
        VK.Util.removeEvent('mousemove', move);
        VK.Util.removeEvent('mouseup', mouseup);
      },
      auth: function() {
        VK.Auth.login(null, 1);
      }
    }, {
      minWidth: 120,
      width: '200',
      height: '290',
      startHeight: 200
    }, function(o, i, r) {
      RPC = r;
    });
  };

  VK.Widgets.Auth = function(objId, options) {
    var pData = VK.Util.getPageData();
    if (!VK._apiId) throw Error('VK not initialized. Please use VK.init');
    if (!options.width) {
      options.width = 200;
    }
    if (options.type) {
      type = 1;
    } else {
      type = 0;
    }
    return VK.Widgets._constructor('widget_auth.php', objId, options, {}, {makeAuth: function(data) {
      if (data.session) {
        VK.Auth._loadState = 'loaded';
        VK.Auth.setSession(data.session, 'connected');
        VK.Observer.publish('auth.loginStatus', {session: data.session, status: 'connected'});
        VK.Observer.unsubscribe('auth.loginStatus');
      }
      if (options.onAuth) {
        options.onAuth(data);
      } else {
        if (options.authUrl) {
          var href = options.authUrl;
        } else {
          var href = window.location.href;
        }
        if (href.indexOf('?') == -1) {
          href+='?';
        } else {
          href+='&';
        }
        var vars = [];

        for (var i in data) {
          if (i != 'session') vars.push(i+'='+decodeURIComponent(data[i]).replace(/&/g, '%26').replace(/\?/, '%3F'));
        }
        window.location.href = href + vars.join('&');
      }
    }}, {startHeight: 80});
  };

  VK.Widgets.Subscribe = function(objId, options, oid) {
    oid = parseInt(oid, 10);
    var RPC;
    if (!oid) {
      throw Error('No owner_id passed');
    }
    var params = {
      oid: oid
    };
    if (options.mode) {
      params.mode = options.mode;
    }
    if (options.soft) {
      params.soft = options.soft;
    }

    return VK.Widgets._constructor('widget_subscribe.php', objId, options, params, {
      showBox: function(url, props) {
        var box = VK.Util.Box((options.base_domain || VK._protocol + '//vk.com/') + url, [], {
          proxy: function() {
            rpc.callMethod.apply(rpc, arguments);
          }
        });
        box.show();
      },
      auth: function() {
        VK.Auth.login(null, 1);
      }
    }, {
      minWidth: 220,
      startHeight: 22,
      height: options.height || 22
    }, function(o, i, r) {
      RPC = r;
    });
  };

  VK.Widgets.Ads = function(objId, options, paramsExtra) {
    options = options || {};
    paramsExtra = paramsExtra || {};
    var params = {};
    var defaults = {};
    var funcs = {};
    var obj = document.getElementById(objId);
    var iframe;
    var rpc;

    var adsParams = {};
    var adsParamsLocal = {};
    var adsParamsDefault = {};
    for (var key in paramsExtra) {
      var keyFix = (inArray(key, ['hash']) ? key : 'ads_' + key);
      adsParams[keyFix] = paramsExtra[key];
    }

    if (obj && obj.getBoundingClientRect) {
      obj.style.width  = '100%';
      obj.style.height = '100%';
      var rect = obj.getBoundingClientRect();
      obj.style.width  = '';
      obj.style.height = '';
      adsParams.ads_ad_unit_width_auto  = Math.floor(rect.right - rect.left);
      adsParams.ads_ad_unit_height_auto = Math.floor(rect.bottom - rect.top);
    }

    adsParamsDefault.ads_ad_unit_width  = 100;
    adsParamsDefault.ads_ad_unit_height = 100;

    adsParamsLocal.ads_ad_unit_width  = (parseInt(adsParams.ads_ad_unit_width)  || adsParams.ads_ad_unit_width === 'auto'  && adsParams.ads_ad_unit_width_auto  || adsParamsDefault.ads_ad_unit_width);
    adsParamsLocal.ads_ad_unit_height = (parseInt(adsParams.ads_ad_unit_height) || adsParams.ads_ad_unit_height === 'auto' && adsParams.ads_ad_unit_height_auto || adsParamsDefault.ads_ad_unit_height);
    if (adsParams.ads_handler) {
      adsParamsLocal.ads_handler = adsParams.ads_handler;
    }
    if (adsParams.ads_handler_empty_html) {
      adsParamsLocal.ads_handler_empty_html = adsParams.ads_handler_empty_html;
    }

    delete adsParams.ads_handler;
    delete adsParams.ads_handler_empty_html;

    params.act = 'ads_web';
    params.url = location.href;
    VK.extend(params, adsParams);

    options.noDefaultParams   = true;
    options.width             = adsParamsLocal.ads_ad_unit_width;
    options.allowTransparency = true;
    defaults.startHeight = adsParamsLocal.ads_ad_unit_height;
    defaults.minWidth    = adsParamsLocal.ads_ad_unit_width;
    funcs.adsOnInitLoader = adsOnInitLoader;
    funcs.adsOnInit       = adsOnInit;

    return VK.Widgets._constructor('ads_rotate.php', objId, options, params, funcs, defaults, onDone);

    function adsOnInitLoader(adsScriptVersion) {
      VK.Widgets.loading(obj, true);
      adsAttachScript(adsScriptVersion);
    }
    function adsOnInit(errorCode, adsParamsExport) {
      VK.Widgets.loading(obj, false);
      adsProcessParams(adsParamsExport);
      if (options.onAdsReady) options.onAdsReady.apply(options.onAdsReady, Array.prototype.slice.call(arguments));
      adsProcessHandler(errorCode);
    }
    function adsAttachScript(adsScriptVersion) {
      if (!('vk__adsLight' in window)) {
        window.vk__adsLight = false;
        adsScriptVersion = parseInt(adsScriptVersion);
        var attachScriptFunc = (VK.Api && VK.Api.attachScript || VK.addScript);
        var base_domain = (options.base_domain || VK._protocol + '//vk.com');
        attachScriptFunc(base_domain + '/js/al/aes_light.js?' + adsScriptVersion);
      } else if (window.vk__adsLight && vk__adsLight.userHandlers && vk__adsLight.userHandlers.onInit) {
        vk__adsLight.userHandlers.onInit(false); // false - do not publish initial onInit
      }
    }
    function adsProcessParams(adsParamsExport) {
      if (!adsParamsExport) {
        return;
      }
      for (var paramName in adsParamsExport) {
        var paramValue = adsParamsExport[paramName];
        if (paramName === 'ads_ad_unit_width' || paramName === 'ads_ad_unit_height') {
          if (!(paramName in adsParams)) {
            adsParamsLocal[paramName] = (parseInt(paramValue) || paramValue === 'auto' && adsParams[paramName + '_auto'] || adsParamsDefault[paramName]);
          }
        } else {
          if (!(paramName in adsParamsLocal)) {
            adsParamsLocal[paramName] = paramValue;
          }
        }
      }
    }
    function adsProcessHandler(errorCode) {
      var handlerResult = adsEvalHandler(adsParamsLocal.ads_handler, errorCode);
      if (errorCode <= 0 && handlerResult !== true) {
        try { console.log('VK: ad_unit_id = ' + adsParams.ads_ad_unit_id, ', errorCode = ', errorCode); } catch (e) {}
        adsInsertHtmlHandler(adsParamsLocal.ads_handler_empty_html, adsParamsLocal.ads_ad_unit_width, adsParamsLocal.ads_ad_unit_height);
      }
    }
    function adsEvalHandler(handler) {
      var result = false;
      try {
        if (!handler) {
          return false;
        }
        var func = false;
        if (isFunction(handler)) {
          func = handler;
        } else if (isString(handler)) {
          var handlerFuncs = handler.split('.');
          func = window;
          for (var i = 0, len = handlerFuncs.length; i < len; i++) {
            func = func[handlerFuncs[i]];
            if (!func) {
              break;
            }
          }
          if (!func) {
            if (handler.substr(0, 8) === 'function') {
              handler = 'return ' + handler + ';';
            }
            var handlerResult = (new Function(handler))();
            if (isFunction(handlerResult)) {
              func = handlerResult;
            } else {
              result = handlerResult;
            }
          }
        }
        if (func) {
          var args = Array.prototype.slice.call(arguments, 1);
          result = func.apply(func, args);
        }
      } catch (e) {
        try {
          console.error(e);
        } catch (e2) {}
      }

      return result;

      function isFunction(obj) {
        return Object.prototype.toString.call(obj) === '[object Function]';
      }
      function isString(obj) {
        return Object.prototype.toString.call(obj) === '[object String]';
      }
    }
    function adsInsertHtmlHandler(handlerHtml, width, height) {
      if (!handlerHtml) {
        return;
      }
      if (!obj) {
        return;
      }

      width  = (width  ? width  + 'px' : '');
      height = (height ? height + 'px' : '');

      var iframeHandlerHtml = '<html><head></head><body style="padding: 0; margin: 0;"><div>' + handlerHtml + '</div></body></html>';

      var iframeHandler = document.createElement('iframe');
      iframeHandler.onload            = fixIframeHeight;
      iframeHandler.id                = (iframe ? iframe.id : ('vkwidget-' + Math.round(Math.random() * 1000000))) + '_ads_html_handler';
      iframeHandler.src               = 'about:blank';
      iframeHandler.width             = '100%';
      iframeHandler.height            = '100%';
      iframeHandler.scrolling         = 'no';
      iframeHandler.frameBorder       = '0';
      iframeHandler.allowTransparency = true;
      iframeHandler.style.overflow    = 'hidden';
      iframeHandler.style.width       = width;
      iframeHandler.style.height      = height;

      obj.style.width                 = width;
      obj.style.height                = height;

      obj.appendChild(iframeHandler);

      iframeHandler.contentWindow.vk_ads_html_handler = iframeHandlerHtml;
      iframeHandler.src = 'javascript:window["vk_ads_html_handler"]';

      function fixIframeHeight() {
        if (height) {
          return;
        }
        try {
          var rect = iframeHandler.contentWindow.document.body.firstChild.getBoundingClientRect();
          var heightFix = Math.ceil(rect.bottom - rect.top);
          if (heightFix) {
            iframeHandler.style.height = heightFix;
            obj.style.height           = heightFix;
          }
        } catch (e) {}
      }
    }
    function indexOf(arr, value, from) {
      for (var i = from || 0, l = (arr || []).length; i < l; i++) {
        if (arr[i] == value) return i;
      }
      return -1;
    }
    function inArray(value, arr) {
      return indexOf(arr, value) != -1;
    }
    function onDone(o, i, r) {
      obj = o;
      iframe = i;
      rpc = r;
    }
  };

  VK.Widgets._constructor = function(widgetUrl, objId, options, params, funcs, defaults, onDone, widgetId, iter) {
    var obj = document.getElementById(objId);
    widgetId = widgetId || (++VK.Widgets.count);

    if (!obj) {
      iter = iter || 0;
      if (iter > 10) {
        throw Error('VK.Widgets: object #' + objId + ' not found.');
      }
      setTimeout(function() {
        VK.Widgets._constructor(widgetUrl, objId, options, params, funcs, defaults, onDone, widgetId, iter + 1);
      }, 500);
      return widgetId;
    }

    var ifr, base_domain, width, url, urlQueryString, encodedParam, rpc, iframe, i;
    options = options || {};
    defaults = defaults || {};
    funcs = funcs || {};

    base_domain = options.base_domain || VK._protocol + '//vk.com';
    width = (options.width == 'auto') ? obj.clientWidth || '100%' : parseInt(options.width, 10);

    if (options.height) {
      params.height = options.height;
      obj.style.height = options.height + 'px';
    } else {
      obj.style.height = (defaults.startHeight || 200) + 'px';
    }

    width = width ? (Math.max(defaults.minWidth || 200, Math.min(10000, width)) + 'px') : '100%';

    if (!params.url) {
      params.url = options.pageUrl || location.href.replace(/#.*$/, '');
    }
    url = base_domain + '/' + widgetUrl;
    urlQueryString = '';
    if (!options.noDefaultParams) {
      urlQueryString += '&app=' + (VK._apiId || '0') + '&width=' + width
    }
    urlQueryString += '&_ver=' + VK.version
    if (VK._iframeAppWidget) {
      params.iframe_app = 1;
    }
    var pData = VK.Util.getPageData();
    params.url      = params.url     || pData.url || "";
    params.referrer = params.referrer || document.referrer || "";
    params.title    = params.title   || pData.title  || document.title || "";
    for (i in params) {
      if (i == 'title' && params[i].length > 80) params[i] = params[i].substr(0, 80)+'...';
      if (i == 'description' && params[i].length > 160) params[i] = params[i].substr(0, 160)+'...';
      if (typeof(params[i]) == 'number') {
        encodedParam = params[i];
      } else {
        try {
          encodedParam = encodeURIComponent(params[i]);
        } catch (e) {
          encodedParam = '';
        }
      }
      urlQueryString += '&' + i + '=' + encodedParam;
    }
    urlQueryString += '&' + (+new Date()).toString(16);
    url += '?' + urlQueryString.substr(1);

    obj.style.width = width;
    VK.Widgets.loading(obj, true);

    funcs.publish = function() {
      var args = Array.prototype.slice.call(arguments);
      args.push(widgetId);
      VK.Observer.publish.apply(VK.Observer, args);
    };
    funcs.onInit = function() {
      VK.Widgets.loading(obj, false);
      if (funcs.onReady) funcs.onReady();
      if (options.onReady) options.onReady();
    }
    funcs.resize = function(e, cb) {
      obj.style.height = e + 'px';
      var el = document.getElementById('vkwidget' + widgetId);
      if (el) {
        el.style.height = e + 'px';
      }
    }
    funcs.resizeWidget = function(newWidth, newHeight) {
      newWidth  = parseInt(newWidth);
      newHeight = parseInt(newHeight);
      var widgetElem = document.getElementById('vkwidget' + widgetId);
      if (isFinite(newWidth)) {
        obj.style.width = newWidth + 'px';
        if (widgetElem) {
          widgetElem.style.width = newWidth + 'px';
        }
      }
      if (isFinite(newHeight)) {
        obj.style.height = newHeight + 'px';
        if (widgetElem) {
          widgetElem.style.height = newHeight + 'px';
        }
      }
      if (options.onResizeWidget) options.onResizeWidget();
    }
    funcs.updateVersion = function(ver) {
      if (ver > 1) {
        VK.Api.attachScript('//vk.com/js/api/openapi_update.js?'+parseInt(ver));
      }
    }
    rpc = VK.Widgets.RPC[widgetId] = new fastXDM.Server(funcs, function(origin) {
      if (!origin) return true;
      origin = origin.toLowerCase();
      return (origin.match(/(\.|\/)vk\.com($|\/|\?)/));
    }, {safe: true});
    iframe = VK.Widgets.RPC[widgetId].append(obj, {
      src: url,
      width: (width.indexOf('%') != -1) ? width : (parseInt(width) || width),
      height: defaults.startHeight || '100%',
      scrolling: 'no',
      id: 'vkwidget' + widgetId,
      allowTransparency: options.allowTransparency || false,
      style: {
        overflow: 'hidden'
      }
    });
    onDone && setTimeout(function() {onDone(obj, iframe || obj.firstChild, rpc);}, 10);
    return widgetId;
  };
}

if (!VK.Util) {
  VK.Util = {
    getPageData: function() {
      if (!VK._pData) {
        var metas = document.getElementsByTagName('meta'), pData = {}, keys = ['description', 'title', 'url', 'image', 'app_id'], metaName;
        for (var i in metas) {
          if (!metas[i].getAttribute) continue;
          if (metas[i].getAttribute && ((metaName = metas[i].getAttribute('name')) || (metaName = metas[i].getAttribute('property')))) {
            for (var j in keys) {
              if (metaName == keys[j] || metaName == 'og:'+keys[j] || metaName == 'vk:'+keys[j]) {
                pData[keys[j]] = metas[i].content;
              }
            }
          }
        }
        if (pData.app_id && !VK._apiId) {
          VK._apiId = pData.app_id;
        }
        pData.title = pData.title || document.title || '';
        pData.description = pData.description || '';
        pData.image = pData.image || '';
        if (!pData.url && VK._iframeAppWidget && VK._apiId) {
          pData.url = '/app' + VK._apiId;
          if (VK._browserHash) {
            pData.url += VK._browserHash
          }
        }
        var loc = location.href.replace(/#.*$/, '');
        if (!pData.url || !pData.url.indexOf(loc)) {
          pData.url = loc;
        }
        VK._pData = pData;
      }
      return VK._pData;
    },
    getStyle: function(elem, name) {
      var ret, defaultView = document.defaultView || window;
      if (defaultView.getComputedStyle) {
        name = name.replace(/([A-Z])/g, '-$1').toLowerCase();
        var computedStyle = defaultView.getComputedStyle(elem, null);
        if (computedStyle) {
          ret = computedStyle.getPropertyValue(name);
        }
      } else if (elem.currentStyle) {
        var camelCase = name.replace(/\-(\w)/g, function(all, letter){
          return letter.toUpperCase();
        });
        ret = elem.currentStyle[name] || elem.currentStyle[camelCase];
      }

      return ret;
    },

    getXY: function(obj, fixed) {
      if (!obj || obj === undefined) return;

      var left = 0, top = 0;
      if (obj.getBoundingClientRect !== undefined) {
        var rect = obj.getBoundingClientRect();
        left = rect.left;
        top = rect.top;
        fixed = true;
      } else if (obj.offsetParent) {
        do {
          left += obj.offsetLeft;
          top += obj.offsetTop;
          if (fixed) {
            left -= obj.scrollLeft;
            top -= obj.scrollTop;
          }
        } while (obj = obj.offsetParent);
      }
      if (fixed) {
        top += window.pageYOffset || window.scrollNode && scrollNode.scrollTop || document.documentElement.scrollTop;
        left += window.pageXOffset || window.scrollNode && scrollNode.scrollLeft || document.documentElement.scrollLeft;
      }

      return [left, top];
    },

    Box: function(src, sizes, fnc, options) {
      fnc = fnc || {};
      var overflowB = document.body.style.overflow;
      var loader = document.createElement('DIV');
      var rpc = new fastXDM.Server(VK.extend(fnc, {
            onInit: function() {
              iframe.style.background = 'transparent';
              iframe.style.visibility = 'visible';
              document.body.style.overflow = 'hidden';
              document.body.removeChild(loader);
            },
            hide: function() {
              iframe.style.display = 'none';
            },
            tempHide: function() {
              iframe.style.left = '-10000px';
              iframe.style.top = '-10000px';
              iframe.style.width = '10px';
              iframe.style.height = '10px';
              document.body.style.overflow = overflowB;
            },
            destroy: function() {
              try {
                iframe.src = 'about: blank;';
              } catch (e) {}
              iframe.parentNode.removeChild(iframe);
              document.body.style.overflow = overflowB;
            },
            resize: function(w, h) {
            }
          }, true), false, {safe: true}),
          iframe = rpc.append(document.body, {
            src: src.replace(/&amp;/g, '&'),
            scrolling: 'no',
            allowTransparency: true,
            style: {position: 'fixed', left: 0, top: 0, zIndex: 1002, background: VK._protocol + '//vk.com/images/upload.gif center center no-repeat transparent', padding: '0', border: '0', width: '100%', height: '100%', overflow: 'hidden', visibility: 'hidden'}
          });
      loader.innerHTML = '<div style="position: fixed;left: 50%;top: 50%;margin: 0px auto 0px -60px;z-index: 1002;width: 100px;"><div style="background: url(//vk.com/images/upload_inv_mono'+(window.devicePixelRatio >= 2 ? '_2x' : '')+'.gif) no-repeat 50% 50%;background-size: 64px 16px;height: 50px;position: absolute;width: 100%;z-index: 100;"></div><div style="background-color: #000;opacity: 0.7;filter: alpha(opacity=70);height: 50px;-webkit-border-radius: 5px;-khtml-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;-webkit-box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.35);-moz-box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.35);box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.35);"></div></div>';
      document.body.insertBefore(loader, document.body.firstChild);
      return {
        show: function(scrollTop, height) {
          iframe.style.display = 'block';
          document.body.style.overflow = 'hidden';
        },
        hide: function() {
          iframe.style.display = 'none';
          document.body.style.overflow = overflowB;
        },
        iframe: iframe,
        rpc: rpc
      }
    },

    addEvent: function(type, func) {
      if (window.document.addEventListener) {
        window.document.addEventListener(type, func, false);
      } else if (window.document.attachEvent) {
        window.document.attachEvent('on'+type, func);
      }
    },

    removeEvent: function(type, func) {
      if (window.document.removeEventListener) {
        window.document.removeEventListener(type, func, false);
      } else if (window.document.detachEvent) {
        window.document.detachEvent('on'+type, func);
      }
    },

    ss: function(el, styles) {VK.extend(el.style, styles, true);}
  };
}

// Init asynchronous library loading
window.vkAsyncInit && setTimeout(vkAsyncInit, 0);

if (window.vkAsyncInitCallbacks && vkAsyncInitCallbacks.length) {
  setTimeout(function() {
    var callback;
    while (callback = vkAsyncInitCallbacks.pop()) {
      try {
        callback();
      } catch(e) {
        try {
          console.error(e);
        } catch (e2) {}
      }
    }
  }, 0);
}

try{stManager.done('api/openapi.js');}catch(e){}

	
	</script>
	
	
	<?include($_SERVER["DOCUMENT_ROOT"].'/template/footer.tpl');?>
	
	
	<style>
	
	.scratchcases {
    position: absolute;
    top: 45px;
    left: 48px;
    width: 510px;
}
	
	</style>