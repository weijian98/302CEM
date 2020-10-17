<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'event_date')->textInput([
        'type' => 'date']) ?>
    <?= $form->field($model, 'event_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_time')->textInput([
        'type' => 'time']) ?>

    <?= $form->field($model, 'event_duration')->textInput([
        'type' => 'time'
    ]) ?>

    <?= $form->field($model, 'event_totalseats')->textInput([
        'type' => 'number'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>