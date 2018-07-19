<?php
namespace onix\assets;

use yii\web\AssetBundle as YiiAssetBundle;

class PaceAsset extends YiiAssetBundle
{
    public $sourcePath = '@bower/pace';

    public $css = [
        'themes/orange/pace-theme-flash.css',
    ];

    public $js = [
        'pace.min.js',
    ];

    public $depends = [
    ];
}
