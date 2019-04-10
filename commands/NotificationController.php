<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 10/04/2019
 * Time: 19:22
 */

namespace app\commands;

use yii\console\Controller;

class NotificationController extends Controller
{
    public $from;

    public function actionTest() {
        echo "Hello world".PHP_EOL;
    }

    public function actionSendNotifications($activity) {
        echo $activity;

    }
}