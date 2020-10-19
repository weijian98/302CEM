<?php
/**
 * Created by PhpStorm.
 * User: Yuan Shen
 * Date: 27/9/2020
 * Time: 3:12 PM
 */
/* @var $model app\models\Booking */
use yii\helpers\Html;

$this->title = 'Find Ticket';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-booking">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::beginForm(['site/index'], 'post', ['enctype' => 'multipart/form-data']) ?>
<p>
    <b><?= Html::label('Date', 'ticketdate') ?></b>
    <b><?= Html::Input('date','ticketdate', "",$options=['class'=>'form-control', 'maxlength'=>10, 'style'=>'width:350px']) ?></b><br>
    <b><?= Html::label('Pax', 'pax') ?></b>
    <b><?= Html::Input('number','pax', "",$options=['class'=>'form-control', 'maxlength'=>10, 'style'=>'width:350px']) ?></b><br>
    <b><?= Html::label('Ticket Choice', 'ticketlist') ?></b>
    <b><?= Html::dropDownList('ticketlist', "", Array("VIP","PS1","PS2")) ?></b><br>
    <br><b><?= Html::submitButton('Make payment',['class' => 'submit']) ?></b>


</p>
    <?= Html::endForm() ?>
<code><?= __FILE__ ?></code>
</div>