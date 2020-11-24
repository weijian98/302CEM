<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use app\models\Event;
use app\models\Booking;
$this->title = 'E-Event Ticket';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$request = Yii::$app->request;
$id = $request->get('id');
$event = Event::findOne($id);
if (isset($event)) {
    $booking = Booking::findAll([
        'event_id' =>  $event['event_id'],
    ]);
    $print2 = [];
    $countPax = 0;
    if (isset($booking)) {
        foreach ($booking as $row) {
            $print2[] = $row;
        }
        $booking1count = count($print2);
        for ($i1 = 0;
             $i1 < $booking1count;
             $i1++) {
            $countPax = $countPax + $print2[$i1]['pax_total'];
        }}
?>
<div class="site-concert">
<div class="jumbotron">
    <h1>Concert Events</h1>
</div>
<div class="container" style="padding-bottom:20px">
    <div class="row" style="background-color:#EBEDEF;">
        <div class="column" style="background-color:#EBEDEF;">
          <div class="center" >
            <?php echo $event['event_picture'] ?> </div>
        </div>

        <div class="column" style="background-color:#EBEDEF;">
            <h2 style="margin-top:5px">Ticket and Event Info</h2>
            <p style="text-align: justify"><?php echo $event['event_info'] ?> </p>
            <b style="font-size:16px">Date:</b>
            <p> <?php echo $event['event_date'] ?> </p>

            <b style="font-size:16px">Total Seat:</b>
            <p> <?php echo $event['event_totalseats'] ?> </p>

            <b style="font-size:16px">Available Seat:</b>
            <p> <?php echo $event['event_totalseats'] - $countPax ?> </p>

            <b style="font-size:16px">Location:</b>
            <p> <?php echo $event['event_location'] ?> </p>

            <b style="font-size:16px">Price:</b>
            <p> <?php echo $event['event_ticket_price'] ?></p>

            <b style="font-size:16px">Concert Organizer</b>
            <p><?php echo $event['event_organizer'] ?></p>

            <?php ?>
                <a href="<?php
                if($event['event_totalseats'] > $countPax){
                echo Url::to(['site/booking', 'id' => $event['event_id']]);} ?>"
                   class="<?php
                   if($event['event_totalseats'] > $countPax){
                       echo "btn btn-success stretched-link";}else {echo "btn btn-danger stretched-link"; } ?>" style="width:100%"><?php
                    if($event['event_totalseats'] > $countPax){
                        echo "Find Tickets";}else {echo "Sold Out"; } ?></a>

        </div>
    </div>
</div>
<?php } ?>