<?php
if (!function_exists('wfLoadSkin')) {
    function wfLoadSkin($skinName, $path = null) {
        // 伪定义，仅用于静态分析工具
    }
}
wfLoadSkin( 'Citizen', "/www/wwwroot/mw-utils/YsArchives-Skins/Citizen/skin.json" );
wfLoadSkin( 'Vector', "/www/wwwroot/mw-utils/YsArchives-Skins/Vector/skin.json" );
wfLoadSkin( 'Gongbi', "/www/wwwroot/mw-utils/YsArchives-Skins/Gongbi/skin.json" );

$wgDefaultSkin = "Citizen";
$wgCitizenSearchDescriptionSource = "wikidata";
$wgCitizenSearchGateway = 'mwActionApi';
$wgCitizenEnableCollapsibleSections = false;
$wgCitizenThemeColor = "#338c60";
$wgCitizenMaxSearchResults = 6;