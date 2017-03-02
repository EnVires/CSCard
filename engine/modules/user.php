<?php
if(!isset($Functions)){
    die("Error! 404");
}
$user = $Functions->getUser();
if(!$user && empty($_GET['id'])) die($Functions->getIndex("404"));

if(!empty($_GET['id'])){
    $getUser = $Functions->getUser($_GET['id']);
    if(!$getUser || $getUser->steamid == $user->steamid){
        header("Location: /user");
    }else{
        $itemsBlock = '';
		$items = $Functions->db->query("SELECT * FROM `drops` WHERE user = '".$getUser->steamid."' ORDER BY id DESC");
		$casesopened = 0;
		while($drop = $items->fetch_object()){
			$casesopened++;
			$item = $Functions->db->query("SELECT * FROM `items` WHERE id = '".$drop->itemid."'")->fetch_object();
			$case = $Functions->db->query("SELECT `picture` FROM `cases` WHERE name = '".$drop->casename."'")->fetch_object();
			if($drop->status == 0){
				$status = '<span class="status-icon alarm" title="Статус еще не выбран!"></span>';
			}
			if($drop->status == 1){
				$status = '<span class="status-icon compl" title="Передан боту"></span>';
			}elseif($drop->status == 2){
				$status = '<span class="status-icon ingame" title="Продан за '.$drop->price.' руб."></span>';
			}elseif($drop->status == 3){
				$status = '<span class="status-icon compl" title="Отправлен пользователю"></span>';
			}elseif($drop->status == 4){
				$status = '<span class="status-icon alarm" title="'.$drop->message.'"></span>';
			}
			$itemsBlock .= '<span class="item-incase '.$item->type.'" target="_blank" style="text-decoration: none;">
									<div class="status">
										<span class="status-text">'.$drop->price.'₽.</span>
										'.$status.'
									</div>
									<div class="picture">
										<img class="picture-item" src="'.$item->image.'/110fx82f" alt="Дроп">
										<img class="picture-case" src="'.$case->picture.'">
									</div>
									<div class="descr">
										<strong>'.$item->weapon.'</strong>
										<span>'.$item->name.'</span>
									</div>
								</span>';
		}
		$itemsBlock .= '';

		if($items->num_rows == 0){
			$itemsBlock = 'Вы еще не открывали кейсы...';
		}

		echo $Functions->getIndex("otheruser", [
			'from' => ['{inventory}', '{user_avatar}', '{user_name}', '{user_steam}', '{casesopened}'],
			'to' => [$itemsBlock, $getUser->avatar, strip_tags($getUser->name), $getUser->steamid, $casesopened]
		]);
    }
}else{
    $itemsBlock = '';
    $items = $Functions->db->query("SELECT * FROM drops WHERE user = '".$user->steamid."' ORDER BY id DESC");
	$casesopened = 0;
    while($drop = $items->fetch_object()){
		$casesopened++;
        $item = $Functions->db->query("SELECT * FROM items WHERE id = '".$drop->itemid."'")->fetch_object();
		$case = $Functions->db->query("SELECT `picture` FROM cases WHERE name = '".$drop->casename."'")->fetch_object();
		$status = '';
        if($drop->status == 0){
            $status = '<a href="/api?action=sellItem&item_id='.$drop->id.'" class="status-icon ingame" title="Продать за '.$drop->price.' руб."></a> <a href="/api?action=sendItem&item_id='.$drop->id.'" class="status-icon tosell" title="Вывести"></a>';
        }
        if($drop->status == 1){
            $status = '<span class="status-icon compl" title="Передан боту"></span>';
        }elseif($drop->status == 2){
            $status = '<span class="status-icon ingame" title="Продан за '.$drop->price.' руб."></span>';
        }elseif($drop->status == 3){
			$status = '<span class="status-icon compl" title="Отправлен"></span>';
		}elseif($drop->status == 4){
			$status = '<span class="status-icon alarm" title="'.$drop->message.'"></span>';
		}
        $itemsBlock .= '<span class="item-incase '.$item->type.'" target="_blank" style="text-decoration: none;">
								<div class="status">
									<span class="status-text">'.$drop->price.'₽.</span>
									'.$status.'
								</div>
								<div class="picture">
									<img class="picture-item" src="'.$item->image.'/110fx82f" alt="Дроп">
									<img class="picture-case" src="'.$case->picture.'">
								</div>
								<div class="descr">
									<strong>'.$item->weapon.'</strong>
									<span>'.$item->name.'</span>
								</div>
							</span>';
    }
    $itemsBlock .= '';

    if($items->num_rows == 0){
        $itemsBlock = 'Вы еще не открывали кейсы...';
    }

    echo $Functions->getIndex("user", [
        'from' => ['{trade_link}', '{inventory}', '{user_avatar}', '{user_name}', '{user_steam}', '{casesopened}'],
        'to' => [$user->tradelink, $itemsBlock, $user->avatar, strip_tags($user->name), $user->steamid, $casesopened]
    ]);
}

?>