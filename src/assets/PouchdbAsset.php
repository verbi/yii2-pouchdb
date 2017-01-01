<?php
namespace verbi\yii2Pouchdb\assets;

use yii\web\AssetBundle;

/*
 * @author Philip Verbist <philip.verbist@gmail.com>
 * @link https://github.com/verbi/Yii2-Helpers/
 * @license https://opensource.org/licenses/GPL-3.0
*/
class PouchdbAsset extends AssetBundle
{
    public $sourcePath = '@bower/pouchb/dist';

    public $js = [
        "min/pouchdb.min.js"
    ];

    public $css = [
        "min/pouchdb.min.css"
    ];

    public $publishOptions = [
        'forceCopy' => true,
    ];
}