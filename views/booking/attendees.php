<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Booking;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attendees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-attendees">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    //$sql = 'select * from booking order by id DESC';
    $booking=Booking::find()->all();
    $print1 = [];
    if($booking != null ) {
    foreach ($booking as $row){
        $print1[] =$row;
    }
    $booking1count = count($print1);
    }?>


   <div class="jumbotron" style="color:black">
        <h2><strong>Event Ticket Booked By User</strong></h2>
        <hr>
        <br>

        <div class="body-content">

            <?php
            if (isset($booking1count)){
            for ($i = 0;
            $i < $booking1count;
            $i++){
            ?>

            <div class="<?php echo $print1[$i]['booking_id']; ?>" class="<?php if ($i != 0) {
                echo 'panel-collapse collapse';
            } else {
                echo 'panel-collapse collapse in';
            } ?>">

                <div style="color:teal"><br></div>

                <div class="row"></div>


                <?php
                echo "Event ID: " . $print1[$i]['event_id'] . "<br>";
                echo "Pax Total: " . $print1[$i]['pax_total'] . "<br>";
                echo "------------------------------------------------------<br>";
                }
                } 
                ?>


            </div>
        </div>
    </div>
</div>
</div></div></div>
