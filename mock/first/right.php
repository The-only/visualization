<?php
/**
 * @file 堆叠柱状图
 * @author sunwei11(sunwei11@baidu.com)
 */

$tplData['test'] = 'xxxx';
$tplData['testjson'] = json_decode(
    file_get_contents(
        './data/test.json'
    ),
    TRUE
);
