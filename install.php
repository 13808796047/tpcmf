<?php

/**
 * 安装程序
 */

header('Content-Type: text/html; charset=utf-8');

// 判断环境
if (version_compare(PHP_VERSION, '7.1.0') < 0) {
    echo "<font color=red>PHP版本必须在7.1以上</font>";exit;
}


define('WEBPATH', dirname(__FILE__).'/');
define('WRITEPATH', WEBPATH.'cache/');

// 判断目录权限
foreach ([
             WRITEPATH,
             WRITEPATH.'data/',
             WRITEPATH.'template/',
             WRITEPATH.'session/',
             WEBPATH.'config/',
             WEBPATH.'uploadfile/',
         ] as $t) {
    if (!dr_check_put_path($t)) {
        exit('目录（'.$t.'）不可写');
    }
}

header('Location: index.php?c=install');

// 检查目录权限
function dr_check_put_path($dir) {

    if (!$dir) {
        return 0;
    } elseif (!is_dir($dir)) {
        return 0;
    }

    $size = file_put_contents($dir.'test.html', 'test');
    if ($size === false) {
        return 0;
    } else {
        @unlink($dir.'test.html');
        return 1;
    }
}