<?php

include_once __DIR__ . '/Common.php';
require_once __DIR__ . '/BaseYii.php';

class Yii extends \yii\BaseYii
{
    
    public static $device = 'desktop', $is_mobile = false,$_category = [],$site = [],$item = [];
    
     
    
}

spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = require __DIR__ . '/classes.php';
Yii::$container = new yii\di\Container();