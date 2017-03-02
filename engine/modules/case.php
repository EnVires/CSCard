<?php
if(!isset($Functions)){
    die("Error! 404");
}

$caseName = $_GET['name'];
if(empty($caseName)){
    die($Functions->getIndex("404"));
}else{
    $case = $Functions->db->query("SELECT * FROM cases WHERE name = '".$Functions->getString($caseName)."'");
    if($case->num_rows == 0){
        die($Functions->getIndex("404"));
    }else{
        $case = $case->fetch_object();
        $items = explode(",", $case->items);
        $randItems = [];
        $itemsBlock = '';
        foreach($items as $key => $item){
            $item = $Functions->db->query("SELECT * FROM items WHERE id = '".$item."'")->fetch_object();
            $searchQuery = str_replace(" ", "%20", ($item->weapon." | ".$item->name));
            //http://steamcommunity.com/market/search?appid=730&q='.$searchQuery.'
            $itemsBlock .= '<a class="item-incase '.$item->type.'" target="_blank" href="https://csgo.tm/?s=price&search='.$searchQuery.'" style="text-decoration: none;">
			<div class="picture">
				<img src="'.$item->image.'/110fx82f" alt="Дроп">
			</div>
			<div class="descr">
				<strong>'.$item->weapon.'</strong>
				<span>'.$item->name.'</span>
			</div></a>';
			$randItems[] = ['weapon' => $item->weapon, 'name' => $item->name, 'image' => $item->image, 'type' => $item->type];
        }

        $caruselBlock = '';
        for($i = 0; $i < 35; $i++){
            $blue = [];
            if(rand(0, 3) != 2){
                foreach($randItems as $rItem){
                    if($rItem['type'] == "milspec"){
                        $blue[] = $rItem;
                    }
                }
                $randItem = $blue[array_rand($blue)];
            }else{
                $randItem = $randItems[array_rand($randItems)];
            }
            $caruselBlock .= '<div class="case-weapon-block-carusel weaponblock '.$randItem['type'].'">
                        <img src="'.$randItem['image'].'">
                        <div class="case-weapon-block-info"><span>'.$randItem['weapon'].'<br>'.$randItem['name'].'</span></div>
                    </div>';
        }
    }
}

echo $Functions->getIndex("case", [
    'from' => ['{case_title}', '{case_in}', '{rand_cases}', '{case_name}', '{case_picture}'],
    'to' => [$case->title, $itemsBlock, $caruselBlock, $case->name, $case->picture]
]);

?>