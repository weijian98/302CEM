<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \app\models\BookForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use app\models\Event;
use app\models\Booking;
$this->title = 'Book Slot';
$this->params['breadcrumbs'][] = $this->title;
$request = Yii::$app->request;
$id = $request->get('id');
$event = Event::findOne($id);
if (isset($event)) {
    $booking = Booking::findAll([
        'event_id' => $event['event_id'],
    ]);
    $print2 = [];
    $countPax = 0;
    $available_seat = $event['event_totalseats'];
    if (isset($booking)) {
        foreach ($booking as $row) {
            $print2[] = $row;
        }
        $booking1count = count($print2);
        for ($i1 = 0;
             $i1 < $booking1count;
             $i1++) {
            $countPax = $countPax + $print2[$i1]['pax_total'];
        }
        $available_seat = $event['event_totalseats'] - $countPax;
    }
}
?>

<div class="site-booking">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to book your slot:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-booking']); ?>
                <?= $form->field($model, 'event_id')->hiddenInput(['value'=>$id])->label(false)?>

                <?= $form->field($model, 'available_seat')->hiddenInput(['value'=>$available_seat])->label(false)?>

                <?= $form->field($model, 'booking_date')->hiddenInput(['value'=> date("yy-m-d")])->label(false)?>

                <?= $form->field($model, 'pax_total') ->dropDownList(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'])?>

                <?= $form->field($model, 'time')->hiddenInput(['value'=> date('H:i')])->label(false)?>

                <?= $form->field($model, 'seat_number_row') ->dropDownList(['A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E','F'=>'F','G'=>'G','H'=>'H','I'=>'I'])?>

                <?= $form->field($model, 'payment_method') ->dropDownList(['GrabPay'=>'GrabPay','Boost'=>'Boost','T&G'=>'Touch & Go','Online Banking'=>'Online Banking'])?>


                <div class="form-group">
                    <?= Html::submitButton('Book Now', ['class' => 'btn btn-primary', 'name' => 'book-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>