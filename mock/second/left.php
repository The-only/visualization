<?php
/**
 * @file 左边平行坐标图
 * @author lideqing(lideqing@baidu.com)
 */

$tplData['test'] = 'xxxx';
$tplData['testjson'] = json_decode(
    file_get_contents(
        './data/test.json'
    ),
    TRUE
);
