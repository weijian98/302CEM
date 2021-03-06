<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Booking;
use yii\widgets\ListView;

$this->title = 'Booking History Details';
?>

<div class="site-bookingHistory">

    <?php
    $booking = Booking::findAll([
        'user_id' => Yii::$app->user->identity->id,
    ]);
    $print1 = [];
    if ($booking != null) {
        foreach ($booking as $row) {
            $print1[] = $row;
        }
        $booking1count = count($print1);
    } ?>

    <div class="jumbotron" style="color:black">
        <h2><strong>Booking History</strong></h2>
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

                echo "Date of Booked Event: " . $print1[$i]['booking_date'] . "<br>";
                echo "Pax Total: " . $print1[$i]['pax_total'] . "<br>";
                echo "Time: " . $print1[$i]['time'] . "<br>";
                echo "Seat Row: " . $print1[$i]['seat_number_row'] . "<br>";
                echo "Payment Method: " . $print1[$i]['payment_method'] . "<br>";
                echo "------------------------------------------------------<br>";
                }
                } else {
                    echo "No booking history found";
                }
                ?>


            </div>
        </div>
    </div>
</div>
</div></div></div>