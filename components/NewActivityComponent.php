<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 06/04/2019
 * Time: 08:35
 */

namespace app\components;

use yii\base\Component;
use app\models\TestForm;

class NewActivityComponent extends Component
{
    public function getModel($params=null){
        $model=new TestForm();
        if($params){
            $model->load($params);
        }
        return $model;
    }
    /**
     * @param $model
     * @return bool
     */
    public function createActivity(&$model):bool{

        if(!$model->validate('name', 'email', 'begin', 'end', 'notify', 'user_id', 'newend')){
            return false;
        }

        if(!$model->save()){
            return false;
        }
        return true;
    }


}