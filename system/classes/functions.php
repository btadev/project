<?php
/*
* Name: FS
* Author: github.com/ptudweb-lab/project
* Version: VERSION.txt
*/

defined('_IN_FS') or die('Error: restricted access');

class functions
{
    

    public static function display_error($message) {
        return '<div class="alert alert-danger"><i class="fas fa-times-circle "></i> ' . $message . '</div>';
    }
}