<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payment_id')->textInput() ?>

    <?= $form->field($model, 'payment_date')->textInput() ?>

    <?= $form->field($model, 'payment_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cardholder_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'card_number')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cvv')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'credit_card_type')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
