<?php
namespace xandrkat\slider;

use yii\web\AssetBundle;

/**
 * Class NormalizeCssAsset
 *
 * @package xandrkat\slider
 */
class NormalizeCssAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/normalize.css';

    /**
     * @var array
     */
    public $css = [
        'normalize.css'
    ];


}
