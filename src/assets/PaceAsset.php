<?php
namespace onix\assets;

use yii\web\AssetBundle;

class PaceAsset extends AssetBundle
{
    /**
     * Color theme
     * Available: black, blue, green, orange, pink, purple, red, silver, white, yellow
     *
     * @var string
     */
    public $color = "orange";

    /**
     * Animation
     * Available: barber-shop, big-counter, bounce, center-atom, center-circle, center-radar, center-simple,
     * corner-indicator, fill-left, flash, flat-top, loading-bar, mac-osx, minimal
     *
     * @var string
     */
    public $animation = "flash";

    public $sourcePath = '@bower/pace';

    public $css = [
        'themes/orange/pace-theme-flash.css',
    ];

    public $js = [
        'pace.min.js',
    ];

    public $depends = [
    ];

    public function init()
    {
        parent::init();

        $this->css = [
            "themes/{$this->color}/pace-theme-{$this->animation}.css"
        ];

        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            if (is_dir($from)) {
                return true;
            } else {
                $ext = pathinfo($from, PATHINFO_EXTENSION);
                return $ext == "js" || $ext == "css";
            }
        };
    }
}
