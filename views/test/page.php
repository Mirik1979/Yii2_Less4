<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 22/03/2019
 * Time: 20:01
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($form_model, 'name')->textInput()->label('Имя события'); ?>
<?= $form->field($form_model, 'email')->textInput()->label('Эл адрес участника'); ?>
<?= $form->field($form_model, 'begin')->input( 'date')->label('Дата начала'); ?>
<?= $form->field($form_model, 'end')->input('date')->label('Дата окончания'); ?>
<?= $form->field($form_model, 'newend')->input('date')->label('Резервная дата окончания'); ?>
<?= $form->field($form_model, 'notify')->checkbox()->label('Оповещать о начале'); ?>
<?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>