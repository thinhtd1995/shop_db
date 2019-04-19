<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
         'css/font-awesome.min.css',
         'css/custom.min.css',
         'css/croppie.css',
    ];
    public $js = [
        'tinymce/tinymce.min.js',
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/main.js',
        'js/crop.js',
        'js/croppie.min.js',
        
    ];
    public $depends = [

        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
