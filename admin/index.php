<?php

/*
* Name: FS
* Author: github.com/ptudweb-lab/project
* Version: VERSION.txt
*/
define('_IN_FS', 1);
$headmod = 'admin_panel';
$title = 'Quản lí';
require_once('../system/core.php');

if (!$isAdmin) {
    die('Khu vực này chỉ dành cho quản trị viên! Đi ra điiiii...');
}

    $modules = [
                'general' => 'Thiết lập chung',
                'category' => 'Danh mục sản phẩm',
                'product' => 'Quản lí sản phẩm',
                'bill' => 'Các đơn đặt hàng'
                ];
    $icon_modules = ['general' => 'fa-cog',
                    'category' => 'fa-th-list',
                    'product' => 'fa-shopping-basket',
                    'bill' => 'fa-money-bill-alt'
                ];
    $module = isset($_GET['mod']) ? trim($_GET['mod']) : 'general';
    if (!array_key_exists($module, $modules)) {
        die('404 not found!');
    }
    $module = str_replace('.', '', $module);
    $module = str_replace('/', '', $module);
    $module = str_replace('\\', '', $module);
    
    $left_panel_content = [];
    foreach ($modules as $key => $value) {
        $left_panel_content[] = ['key' => $key,
                            'val' => $value,
                            'active' => ($module == $key ? 'active' : ''),
                            'icon' => $icon_modules[$key]];
    }

    include 'modules/' .$module . '.php';

    $tpl->assign('items', $left_panel_content);
    $tpl->assign('file_module', $module . '.html');

    $tpl->display('index.html');
    
