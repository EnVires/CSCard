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
				<div class="p-items p-suka-items">
					{inventory}
				</div>
			</div>
		</div>
	</div>
{include file="footer.tpl"}