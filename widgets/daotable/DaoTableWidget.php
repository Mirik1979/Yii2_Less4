<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 06/04/2019
 * Time: 18:15
 */

namespace app\widgets\daotable;

use \yii\base\Widget;

class DaoTableWidget extends Widget
{

    public $activities;

    public function run()
    {
        return $this->render('index', ['data'=>$this->activities]);

    }


}