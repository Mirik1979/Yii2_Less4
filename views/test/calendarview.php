<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 10/04/2019
 * Time: 20:37
 */
$events = array();
//Testing
$Event = new \yii2fullcalendar\models\Event();
$Event->id = 1;
$Event->title = 'Testing';
$Event->start = date('Y-m-d\Th:m:s\Z');
$events[] = $Event;

$Event = new \yii2fullcalendar\models\Event();
$Event->id = 2;
$Event->title = 'Testing';
$Event->start = date('Y-m-d\Th:m:s\Z',strtotime('tomorrow 9am'));
$Event->end = date('Y-m-d\Th:m:s\Z',strtotime('tomorrow 12am'));
$events[] = $Event;
?>
<?= \yii2fullcalendar\yii2fullcalendar::widget(array(
    'events'=> $events,
));