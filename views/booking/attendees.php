<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attendees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-attendees">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'booking_id',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
