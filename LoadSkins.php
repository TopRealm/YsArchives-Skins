<?php
wfLoadSkin( 'Citizen', "/www/wwwroot/mw-utils/YsArchives-Skins/Citizen/skin.json" );
wfLoadSkin( 'Vector', "/www/wwwroot/mw-utils/YsArchives-Skins/Vector/skin.json" );
#wfLoadSkin( 'Gongbi', "/www/wwwroot/mw-utils/YsArchives-Skins/Gongbi/skin.json" );

$wgDefaultSkin = "Citizen";
$wgCitizenSearchDescriptionSource = "textextracts";
$wgCitizenEnableCollapsibleSections = false;
$wgCitizenManifestOptions = [
	'background_color' => '#338c60',
	'description' => '有兽档案馆（youshou.wiki）是一项由粉丝策划并建立的，面向《有兽焉》IP的高针对性开放、共享、共建的粉丝wiki网站。',
	'short_name' => '有兽档案馆',
	'theme_color' => "#338c60",
	'icons' => [
        'https://youshou.wiki/images/thumb/e/e1/有兽档案馆绿色图书Logo.svg/36px-有兽档案馆绿色图书Logo.svg.png', 
        'https://youshou.wiki/images/thumb/e/e1/有兽档案馆绿色图书Logo.svg/72px-有兽档案馆绿色图书Logo.svg.png'
    ],
];