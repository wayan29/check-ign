<?php

require 'ApiGames.php';

use Aditdev\ApiGames;

$api = new ApiGames;

echo $api->GENSHIN_IMPACT('userID', 'zone');//zone : os_asia, os_usa, os_euro , os_cht
//echo $api->HONKAI_STAR_RAIL('userID', 'prod_official_asia'); //prod_official_eur,prod_official_asia, prod_official_usa, prod_official_cht
echo $api->FREEFIRE('<userID>');
echo $api->HONKAI_STAR_RAIL('UserID', 'zone'); //zone : Asia ,Europe, America, Cht 
echo $api->MOBILE_LEGENDS('userID', 'serverID');
