<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
//$I->see('Новосибирск');
//$I->click('//*[@id="module-1-11"]/div[2]/ul/li[3]/div');
$I->fillField('//*[@id="module-1-1-1"]/div/input','Пиво');
$I->click('//*[@id="module-1-1"]/div[2]/form/button[1]');
$I->see('Организации');
$I->see('Расширенный поиск');

?>