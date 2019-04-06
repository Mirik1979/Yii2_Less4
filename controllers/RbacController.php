<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 03/04/2019
 * Time: 20:40
 */

namespace app\controllers;

use app\base\BaseController;
use yii\web\Controller;

class RbacController extends Controller
{
    public function actionGen(){
        \Yii::$app->rbac->generateRbac();
    }
}