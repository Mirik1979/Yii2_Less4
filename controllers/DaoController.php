<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 30/03/2019
 * Time: 16:34
 */

namespace app\controllers;


use app\components\DaoComponent;
use yii\web\Controller;
use yii\web\Request;

class DaoController extends Controller
{

    public function actionIndex() {

        $comp = \Yii::createObject(['class'=>DaoComponent::class]);

        $users = $comp->getAllusers();

        //echo 1;

        //echo \Yii::$app->request->get('user');

        $activitybyuser = $comp->getActivitybyUser(\Yii::$app->request->get('user'));

        //var_dump($activitybyuser);

        //return $this->render('index', compact('users'));
        return $this->render('index', ['users'=>$users, 'activitybyuser'=>$activitybyuser]);
    }

}