<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAssetLogin extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        
        'css/main.css',
        
    
        // 'vendors/bootstrap/dist/css/bootstrap.min.css',
        // 'vendors/font-awesome/css/font-awesome.min.css',
        'build/css/custom.min.css',
    ];
    public $js = [
        'vendors/bootstrap/dist/js/bootstrap.min.js',
        'build/js/custom.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
