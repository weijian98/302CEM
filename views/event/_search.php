<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'event_id') ?>

    <?= $form->field($model, 'event_name') ?>

    <?= $form->field($model, 'event_date') ?>

    <?= $form->field($model, 'event_location') ?>

    <?= $form->field($model, 'event_time') ?>


    <?php // echo $form->field($model, 'event_duration') ?>

    <?php // echo $form->field($model, 'event_totalseats') ?>

    <?php // echo $form->field($model, 'event_info') ?>

    <?php // echo $form->field($model, 'event_organizer') ?>

    <?php // echo $form->field($model, 'event_ticket_price') ?>

    <?php // echo $form->field($model, 'event_picture') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
