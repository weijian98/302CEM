<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Booking;
use yii\widgets\ListView;

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

<div class="jumbotron" style="color:black">
    <h2><strong>Your List of Booked Event</strong></h2> <hr> <br>
    
    <div class="body-content">
        
        <?php
        for($i =0; $i < $booking1count;$i++){?>
        
        <div class="<?php echo $print1[$i]['booking_id']; ?>" class="<?php if ($i != 0){echo 'panel-collapse collapse';} else {echo 'panel-collapse collapse in';}?>">
        
        <div style="color:teal"><br><h2><strong> Book Event Details </strong></h2></div>
        
        <div class="row">
 

<?php

echo "Booking ID: ".$print1[$i]['booking_id']."<br>" ; 
echo "Booking Info: ".$print1[$i]['booking_info_id']. "<br>";
echo "Date of Booked Event: ".$print1[$i]['booking_date']. "<br>";
echo "Ticket ID: ".$print1[$i]['ticket_id']. "<br> <br><hr>";
}
?>

</div>
</div>
</div>
</div>
</div></div></div>