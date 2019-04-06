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

        $form_model = \Yii::$app->activity->getModel();

        if($form_model->load(\Yii::$app->request->post())){
            $form_model->file=UploadedFile::getInstance($form_model, 'file');
            $comp = \Yii::createObject(['class'=>FileServiceComponent::class]);

            if ($form_model->validate()) {
                $saveFile = $comp->saveUploadedFile($form_model->file);
                $formres = \Yii::$app->request->post();
                $compplus = \Yii::createObject(['class'=>DaoComponent::class]);
                $compplus->insertActivity($form_model->name, $form_model->email, $form_model->begin,
                    $form_model->end, $form_model->notify);
                return $this->render('formresult', compact('formres'));

            }

        }


        return $this->render('page', compact('form_model'));


    }
}