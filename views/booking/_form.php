<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'booking_date')->widget(\yii\jui\DatePicker::classname(), [
                    'clientOptions' =>[
                        'dateFormat' => 'yyyy-MM-dd',
                        'maxDate' => '+2w',
                        'minDate' => '+1d',
                    ],
                    'options' => ['class' => 'form-control']])?>

    <?= $form->field($model, 'pax_total') ->dropDownList(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'])?>
                
    <?= $form->field($model, 'time') ->dropDownList(['10:30'=>'10:30','14:30'=>'14:30','18:30'=>'18:30'])?>

    <?= $form->field($model, 'seat_number_row') ->dropDownList(['A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E','F'=>'F','G'=>'G','H'=>'H','I'=>'I'])?>

    <?= $form->field($model, 'payment_method') ->dropDownList(['GrabPay'=>'GrabPay','Boost'=>'Boost','T&G'=>'Touch & Go','Online Banking'=>'Online Banking'])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
