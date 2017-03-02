{include file="header.tpl"}
<div class="items-index">
		<div class="profil widther">
			<div class="p-title">
				Главная <span>Профиль {user_name}</span>
			</div>
			<div class="profil-in">
				<div class="lcol">
					<div class="avatar">
						<img src="{user_avatar}" alt="">
					</div>
					<a href="//steamcommunity.com/profiles/{user_steam}" target="_blank" class="plink">Профиль STEAM</a>
						<div class="opened-cases">Открыто кейсов: <span class="gold">{casesopened}</span></div>
				</div>
				<div class="rcol">
					<a href="#" class="plink start">Начальные настройки</a>
					<a href="#" class="plink items">Ваши предметы</a>
					<div class="profil-tabs">
						<div class="p-set current">
							<i>1.</i> Введите Trade-URL
							Поле для ввода ниже 
						</div>
						<div class="p-set">
							<i>2.</i> Пополните баланс
							WebMoney, Yandex-деньги, QIWI
						</div>
						<div class="p-set">
							<i>3.</i> Выигрывайте!
							Открывайте кейсы по самым выгодным ценам
						</div>

						<div class="profil-tabs-in">
							<form action="/api" method="post">
							  <input type="hidden" name="action" value="updateLink">
							  <input type="url" name="tradelink" class="tradelink" value="{trade_link}" placeholder="https://steamcommunity.com/tradeoffer/new/?partner=YYYYYYYYY&amp;token=XXXXXXXX"> 
							  <a href="https://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url" target="_blank">Где взять ссылку?</a>
							  <input type="submit" value="Сохранить">
							</form></div>
						<div class="profil-tabs-in">
							<form action="/pay" method="post">
						  <h4>Введите сумму для пополнения и нажмите кнопку "Пополнить"</h4><br>
						  <input type="number" name="money" class="step2" value="" placeholder="Сумма"> 
						  
						  <input class="step2" type="submit" value="Пополнить">
						</form>
						</div>
						<div class="profil-tabs-in">
							<form action="/index.php" method="get">
								<input type="submit" value="Перейти к выбору кейсов">
							</form>
						</div>
					</div>
					<div class="profil-ins">
					
						<h4>Внимание! Прочти это! Очень важно!</h4>
						ОСТЕРЕГАЙТЕСЬ МОШЕННИКОВ, которые добавляются к вам в Steam под видом администраторов/модераторов/помощников EliteCase.
						ЗАПОМНИТЕ - мы никогда не будем добавляться к вам в друзья в Steam и предлагать продать ваши предметы по двойной цене, давать ссылки на скачивание чего-либо (скорее всего вредоносные программы и/или стиллеры) и т.д. ЭТО ВСЕ ОБМАН! У ВАС УКРАДУТ ВАШИ ПРЕДМЕТЫ!!!
						ОФИЦИАЛЬНЫЕ КОНТАКТЫ администраторов можете найти у нас в группе Вконтакте (блок "Контакты")
						<br><br>
						ПЕРЕД ОТКРЫТИЕМ КЕЙСОВ обязательно проверьте обмены на вашем аккаунте Steam, иначе наш бот не сможет отправить вам ваши предметы. 
						<br><br>
						Если вы не заберете ваш предмет в течение часа, на ваш баланс возратится полная его стоимость (исходя из цен на торговой площадке Steam)
						<div class="p-items">
							{inventory}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<style>
	.profil {
	margin-top: 50px;
	margin-bottom: 50px;
	overflow: hidden;
}
.profil .p-title {
	font-size: 27px;
	font-weight: 700;
	color: #fff;
	font-family: 'PT Sans', sans-serif;
}

.profil .p-title span {
	background: url(../images/par.png) no-repeat 0 60%;
	font-family: 'Open Sans Condensed', sans-serif;
	font-style: italic;
	padding-left: 25px;
}
.item-incase .status span.status-text { 
background-color: #fbfbfb; 
border-radius: 3px; 
line-height: 28px; 
}

.line-pic {
	background-repeat: no-repeat;
background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 150px;
    height: 115px;
}

.opencase-top-carousel-line-item-image {
    background: #C2C3C5;
}

.p-items .item-incase{
 margin-bottom: 25px;
}

.descr span{
 display:inline-block;
 width: 99%;
 overflow: hidden;
 text-overflow: ellipsis;
 white-space: nowrap
}
.profil .profil-in {
	margin-top: 50px;
	overflow: hidden;
}
.profil .profil-in .lcol {
	width: 213px;
}
.profil .profil-in .avatar {
	width: 148px;
	height: 148px;
	margin-bottom: 20px;
}
.profil .profil-in .avatar img {
	border-radius: 50%;
}
a img, img, iframe {
    max-width: 100%;
    max-height: 100%;
}
.profil .profil-in .rcol {
	float: none;
	overflow: hidden;
}
.profil .profil-in .rcol h4 {
	font-weight: 700;
	font-size: 16px;
	margin: 0;
}
.profil .plink {
	display: inline-block;
	background-color: #7387eb;
	text-align: center;
	color: #fff;
	font-weight: 700;
	padding: 0 15px;
	height: 40px;
	line-height: 40px;
	margin-bottom: 5px;
}
.profil .plink.start {
	background-color: #4862e8;
	width: auto;
}
.profil .plink.items {
	background-color: #0f7f66;
}
.profil .profil-ins {
	background-color: rgba(65,206,175,.1);
	border: 3px solid rgba(255,255,255,.1);
	padding: 19px;
	text-transform: uppercase;
	font-size: 16px;
}
.profil .profil-ins h4 {
	display: block;
	color: #fd6969;
	font-size: 23px;
	margin: 0 0 15px;
	font-weight: 700;
}
.profil .p-items {
	border-top: 2px solid rgba(65,78,81,.3);
	padding: 20px 0;
	margin-top: 10px;
}
.profil .rcol .profil-tabs {
	display: none;
	margin: 10px 0 15px;
}
.p-set {
	font-weight: 700;
	text-transform: uppercase;
	color: #fff;
	width: 300px;
	height: 65px;
	display: inline-block;
	background-color: #41ceaf;
	padding: 4px 10px;
	cursor: pointer;
}
.p-set i {
	font-style: normal;
	font-size: 22px;
	color: #117c64;
}
.p-set a {
	font-size: 13px;
	font-style: italic;
	color: #117c64;
}
.profil-tabs-in {
	margin: 10px 0 15px;
	display: none;
}
.profil-tabs-in input {
	width: 70%;
	font-style: italic;
}
.p-items {
	margin: 10px 0;
}
	</style>
{include file="footer.tpl"}