<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \app\models\BookForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
$this->title = 'Book Slot';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-booking">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to book your slot:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-booking']); ?>

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

                <div class="form-group">
                    <?= Html::submitButton('Book Now', ['class' => 'btn btn-primary', 'name' => 'book-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>