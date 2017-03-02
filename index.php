<?php
require_once("./engine/functions.php");

$moduleGet = $_GET['module'];

if(!isset($moduleGet)){
    $user = $Functions->getUser();

    $casesRarity = '';
    $rarity = $Functions->db->query("SELECT * FROM cases WHERE class='rarity' ORDER BY id ASC");
    while($case = $rarity->fetch_object()){ //eskript.ru
        $casesRarity .= '<a href="/case/'.$case->name.'" class="item '.$case->name.'">
							<strong>'.$case->title.'</strong>
							<div class="picture"><img src="'.$case->picture.'" alt="'.$case->title.'"></div>
							<span>'.$case->price.' <small>₽</small></span>
							<div class="more">Подробнее</div>
						</a>'; //eskript.ru
    }

    echo $Functions->getIndex("index", array(
        'from' => ['{user_avatar}', '{user_name}', '{caserarity}'],
        'to' => [str_replace("_full.jpg", "_medium.jpg", $user->avatar), $user->personaname, $casesRarity]
    ));
}else{
    $module = "./engine/modules/".$moduleGet.".php"; //eskript.ru
    if(is_file($module)){
        require_once($module);
    }else{
        echo $Functions->getIndex("404");
    }
}

?>