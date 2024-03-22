<?php

namespace pendalf89\filemanager\assets;

use yii\web\AssetBundle;

class FilemanagerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/pendalf89/yii2-filemanager/assets/source';
    public $css = [
        'css/filemanager.css',
        'https://use.fontawesome.com/releases/v5.3.1/css/all.css'
    ];
    public $js = [
        'js/filemanager.js',
    ];
    public $depends = [
/*        'yii\bootstrap5\BootstrapAsset',*/
        'yii\web\JqueryAsset',
    ];
}
