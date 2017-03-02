<?php
if(!isset($Functions)){
    die("Error! 404");
}
$user = $Functions->getUser();

$top_three = ['count' => 0, 'text2' => []];
$sql = $Functions->db->query('SELECT * FROM `users` ORDER BY profit DESC LIMIT 3');
while($fetch = $sql->fetch_object()){
	$top_three['count']++;
	$cases = $Functions->db->query('SELECT COUNT(`id`) FROM `drops` WHERE user = "'.$fetch->steamid.'"')->fetch_row()[0];
	$top_three['text2'][] .= '<div class="top-three-one">
					<div class="top-three-one-num">'.$top_three['count'].'</div>
					<div class="top-three-one-avatar" style="background-image:url('.$fetch->avatar.')"></div>
					<div class="top-three-one-nick"><a href="/user/'.$fetch->steamid.'">'.$fetch->name.'</a></div>
					<div class="top-three-one-table">
						<div class="top-three-one-table-kv">
							<div class="top-three-one-table-kv-v">'.$cases.'</div>
							<div class="top-three-one-table-kv-k">кейсов</div>
						</div>
						<div class="top-three-one-table-kv">
							<div class="top-three-one-table-kv-v">'.$fetch->profit.'</div>
							<div class="top-three-one-table-kv-k">профит</div>
						</div>
					</div>
				</div>';
}
$top_three['text'] = $top_three['text2'][1].$top_three['text2'][2].$top_three['text2'][0];

$top_last = ['count' => 3, 'text' => ''];
$sql = $Functions->db->query('SELECT * FROM `users` ORDER BY profit DESC LIMIT 3, 15');
while($fetch = $sql->fetch_object()){
	$top_last['count']++;
	$cases = $Functions->db->query('SELECT COUNT(`id`) FROM `drops` WHERE user = "'.$fetch->steamid.'"')->fetch_row()[0];
	$top_last['text'] .= '<div class="top-list-row">
					<div>'.$top_last['count'].'</div>
					<div style="background-image:url('.$fetch->avatar.')"><a href="/user/'.$fetch->steamid.'">'.$fetch->name.'</a></div>
					<div>'.$cases.'</div><div>'.$fetch->profit.'</div>
				</div>';
}

echo $Functions->getIndex("top", [
    'from' => ['{top_three}', '{top_last}'],
    'to' => [$top_three['text'], $top_last['text']]
]);

?>