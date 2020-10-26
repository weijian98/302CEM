<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'Book Event Details';
?>

<div class="site-bookEvent">


@booking=Booking::model()->findAllBySql(sql "select * from booking order by id DESC");

if($booking != null ) {
    foreach ($booking as $row){
        $print1[] =$row;
    }

    $booking1count = count($print);
}

<div class="jumbotron">
        <h1>Welcome</h1>    
        <p class="lead">View, Select and Book your event ticket now with E-Event Ticket</p>
        <p><a class="btn btn-lg btn-danger" href="<?php echo Url::to(['site/event']);?>">View Available Events</a></p>
    </div>

    <div class="body-content">

    <div class="jumbotron">
        <h2>List of Book Event Details</h2>    
 
    </div>
<div class="<?php echo $print[$i]['id']; ?>" class="<?php if ($i != 0){echo 'panel-collapse collapse';} else {echo 'panel-collapse collapse in';}?>">
    <h2> Book Details </h2>
    <div class="panel-body">
<?php
echo "Booking ID: ".$print[$i];['booking_id']."<br>";
echo "Booking Info: ".$print[$i];['booking_info_id']. "<br>";
echo "Date of Booked Event: ".$print[$i];['booking_date']. "<br>";
echo "Ticket ID: ".$print[$i];['ticket_id']. "<br>";

?>

</div>

</body>