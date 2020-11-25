<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'booking_id') ?>

    <?= $form->field($model, 'booking_info_id') ?>

    <?= $form->field($model, 'booking_date') ?>

    <?= $form->field($model, 'pax_total') ?>
                
    <?= $form->field($model, 'time')?>

    <?= $form->field($model, 'seat_number_row') ?>

    <?= $form->field($model, 'payment_method') ?>

    <?= $form->field($model, 'ticket_count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>