<?php
/**
 * @file 地图、日历图
 * @author dengxiaohong01(dengxiaohong01@baidu.com)
 */

function readJson($module) {
    $filePath = dirname(__FILE__) . '/' . $module . '.json';
    $json = file_get_contents($filePath);
    $p = json_decode($json, true);
    return $p;
}

/*$tplData['chinamapdata'] = readJson('./data/china');*/
