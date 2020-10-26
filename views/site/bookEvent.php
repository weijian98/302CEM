<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Booking;
$this->title = 'Book Event Details';
?>

<div class="site-bookEvent">

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

<div class="jumbotron">
        <h1>Welcome</h1>    
        <p class="lead">View, Select and Book your event ticket now with E-Event Ticket</p>
        <p><a class="btn btn-lg btn-danger" href="<?php echo Url::to(['site/event']);?>">View Available Events</a></p>
    </div>

    <div class="body-content">

    <div class="jumbotron">
        <h2>List of Book Event Details</h2>    
 
    </div>
        <?php
        for($i =0; $i < $booking1count;$i++){?>
<div class="<?php echo $print1[$i]['booking_id']; ?>" class="<?php if ($i != 0){echo 'panel-collapse collapse';} else {echo 'panel-collapse collapse in';}?>">
    <h2> Book Details </h2>
    <div class="panel-body">
<?php
echo "Booking ID: ".$print1[$i]['booking_id']."<br>";
echo "Booking Info: ".$print1[$i]['booking_info_id']. "<br>";
echo "Date of Booked Event: ".$print1[$i]['booking_date']. "<br>";
echo "Ticket ID: ".$print1[$i]['ticket_id']. "<br>";
}
?>
    </div>
</div>

</div>