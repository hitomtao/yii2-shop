<?php
namespace xalberteinsteinx\shop\backend\assets;
use yii\web\AssetBundle;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */

class InputTreeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/xalberteinsteinx/yii2-shop/backend/web';

    public $css = [
        'css/input-tree.css'
    ];
    
    public $js = [
        'js/input-tree.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}