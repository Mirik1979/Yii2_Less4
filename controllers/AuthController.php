<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 02/04/2019
 * Time: 20:57
 */

namespace app\controllers;

use app\models\Users;
use yii\web\Controller;

class AuthController extends Controller
{
    public function actionSignUp()
    {
        $model=\Yii::$app->auth->getModel();

        if(\Yii::$app->request->isPost){
            $model=\Yii::$app->auth->getModel(\Yii::$app->request->post());
            if(\Yii::$app->auth->createUser($model)){
                return $this->redirect(['/']);
            }
        }

        return $this->render('signup',['model'=>$model]);
    }

    public function actionSignIn(){
        /** @var Users $model */
        $model=\Yii::$app->auth->getModel();
        if(\Yii::$app->request->isPost) {
            $model = \Yii::$app->auth->getModel(\Yii::$app->request->post());
            if(\Yii::$app->auth->authUser($model)){
                return $this->redirect(['/test/page']);
            }
        }
        return $this->render('signin',['model'=>$model]);
    }

}