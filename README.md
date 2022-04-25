# yii2-webp-hero

Webp-hero assert for Yii framework.

## Install

``composer require --prefer-dist ereminmdev/yii2-webp-hero``

## Use

Register in the main layout:

```
WebpHeroAsset::register($this);
$this->registerJs('
    const webpMachine = new webpHero.WebpMachine();
	webpMachine.polyfillDocument();
');
```

or add in AppAsset.

## GitHub

https://github.com/chase-moskal/webp-hero
