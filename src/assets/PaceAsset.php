<?php
namespace onix\assets;

use yii\web\AssetBundle;

class PaceAsset extends AssetBundle
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
