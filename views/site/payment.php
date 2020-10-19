<?php

/* @var $model app\models\Booking */
use yii\helpers\Html;

$this->title = 'Payment';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-booking">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::beginForm(['site/index'], 'post', ['enctype' => 'multipart/form-data']) ?>
<p>
    <b><?= Html::label('Cardholder Name', 'ticketdate') ?></b>
    <b><?= Html::Input('text','cardholder_name', "",$options=['class'=>'cardholder_name', 'maxlength'=>30, 'style'=>'width:350px']) ?></b><br>
    <b><?= Html::label('Card number', 'cardnumber') ?></b>
    <b><?= Html::Input('number','creditcardnumber', "",$options=['class'=>'form-control', 'maxlength'=>10, 'style'=>'width:350px']) ?></b><br>
    <b><?= Html::label('Credit card type', 'cardtype') ?></b>
    <b><?= Html::dropDownList('cardtypelist', "", Array("VISA","MASTERCARD","AMERICAN EXPRESS")) ?></b><br>
    <br><b><?= Html::submitButton('Pay',['class' => 'submit']) ?></b>


</p>
    <?= Html::endForm() ?>
<code><?= __FILE__ ?></code>
</div>