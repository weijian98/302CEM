<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form ActiveForm */
?>
<div class="BookingForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'booking_info_id') ?>
        <?= $form->field($model, 'ticket_count') ?>
        <?= $form->field($model, 'booking_date') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- BookingForm -->
