<?php
if(!isset($Functions)){
    die("Error! 404");
}

if(!empty($_GET['MERCHANT_ORDER_ID'])){
    $Functions->redirect('/error');
}

echo $Functions->getIndex("payment_message", ['from' => ['{message}'], 'to' => ['<div class="alert bg-danger" role="alert" style="margin-top: 10px;"><span class="glyphicon glyphicon-exclamation-sign"></span>  Ошибка! Во время оппаты произошла ошибка.</div>']]);

?>