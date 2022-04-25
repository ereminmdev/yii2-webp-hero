<?php

namespace ereminmdev\yii2\webp_hero;

use yii\web\AssetBundle;

class WebpHeroAsset extends AssetBundle
{
    public $sourcePath = '@npm/webp-hero/dist-cjs';

    public $js = [
        'polyfills.js',
        'webp-hero.bundle.js',
    ];
}
