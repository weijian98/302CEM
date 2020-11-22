<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */
/* @var $form ActiveForm */
?>
<div class="payment">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'payment_id') ?>
        <?= $form->field($model, 'payment_date') ?>
        <?= $form->field($model, 'payment_amount') ?>
        <?= $form->field($model, 'cardholder_name') ?>
        <?= $form->field($model, 'card_number') ?>
        <?= $form->field($model, 'cvv') ?>
        <?= $form->field($model, 'credit_card_type') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- payment -->
