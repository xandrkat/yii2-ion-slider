 <?php
namespace xandrkat\slider;

use yii\web\AssetBundle;

/**
 * Class IonSliderAsset
 *
 * @package xandrkat\slider
 */
class IonSliderAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower';

    /**
     * @var array
     */
    public $css = [
        '/necolas/normalize.css/normalize.css',
        '/ionrangeslider/css/ion.rangeSlider.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/ion.rangeSlider.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
