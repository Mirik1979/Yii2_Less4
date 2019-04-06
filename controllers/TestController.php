<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 22/03/2019
 * Time: 19:58
 */

namespace app\controllers;

use app\components\FileServiceComponent;
use app\components\DaoComponent;
use yii\web\Controller;
use app\models\TestForm;
use yii\web\UploadedFile;
use yii\web\HttpException;

class TestController extends Controller
{
    public function actionPage()
    {
        if(!\Yii::$app->rbac->canCreateActivity()){
            throw new HttpException(403,'Not access create activity');
        }
        $form_model = \Yii::$app->newact->getModel();
        $userid = \Yii::$app->user->id;

        if($form_model->load(\Yii::$app->request->post())) {
            $form_model['user_id'] = $userid;
            if (\Yii::$app->newact->createActivity($form_model)) {
                    return $this->redirect(['/test/view']);
            }

        }
        return $this->render('page', compact('form_model'));
    }

    public function actionView() {
        if(\Yii::$app->rbac->editViewAllAcitivity()){
            $testaction = TestForm::find()->limit(50)->all();
        } else {
            $userid = \Yii::$app->user->id;
            $testaction = TestForm::find()->andWhere(['user_id'=>$userid])->all();
        }

        return $this->render('view',
            ['data' => $testaction]
        );
    }

}