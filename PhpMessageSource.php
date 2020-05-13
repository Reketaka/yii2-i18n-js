<?php

namespace reketaka\yii2I18nJs;

class PhpMessageSource extends \yii\i18n\PhpMessageSource{

    /**
     * Использовать для генерации js переводов расширением w3lifer/yii2-i18n-js
     * @var bool
     */
    public $generateJs = false;
    
}