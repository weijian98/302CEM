<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'E-Event Ticket';
use app\models\Event;
use app\models\Booking;
?>
<?php
$event = Event::find()
->all();
$print1 = [];
if ($event != null) {
    foreach ($event as $row) {
        $print1[] = $row;
    }
    $eventcount = count($print1);
} ?>
<div class="site-event">
    <div class="jumbotron">
        <h1>Events</h1>    
    </div>

   <!-- Card Events Display  -->
<div class="container">
    <?php
    if (isset($eventcount)){
    for ($i = 0;
    $i < $eventcount;
    $i++){

    $booking = Booking::findAll([
        'event_id' =>  $print1[$i]['event_id'],
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
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" >
                <?php echo  $print1[$i]['event_picture']?>
                <div class="card-body">
                    <h4 class="card-title"> <?php echo  $print1[$i]['event_name']?></h4>
                    <p class="card-text">Event Date: <?php echo  $print1[$i]['event_date']?></p>
                    <p class="card-text">Total Seat Left: <?php echo  $print1[$i]['event_totalseats'] - $countPax ?></p>
                    <a href="<?php echo Url::to(['site/eventdetails', 'id' => $print1[$i]['event_id']]);?>" class="btn btn-info stretched-link">More Detail</a>
                </div>
            </div>
        </div>
        <?php
        if( $i >1 && $i/3 == 0){
            echo "<br><br><br>";

        }
        }
        } else {
            echo "No event found";
        }
        ?>
   <!-- <br><br><br>

    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="https://source.unsplash.com/rxpThOwuVgE/350x300" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Coding Event</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="<?php echo Url::to(['site/coding']);?>" class="btn btn-info stretched-link">More Detail</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="https://source.unsplash.com/ourQHRTE2IM/350x300" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Hackathon Event</h4>
                    <p class="card-text">Located in London, United Kingdom</p>
                    <a href="<?php echo Url::to(['site/hackathon']);?>" class="btn btn-info stretched-link">More Detail</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="https://source.unsplash.com/HuC3cii5VA8/350x300" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Japanese Theater and Festival Mask Event</h4>
                    <p class="card-text">Located at Edo Wonderladn, Nikkō-shi, Japan</p>
                    <a href="<?php echo Url::to(['site/mask']);?>" class="btn btn-info stretched-link">More Detail</a>
                </div>
            </div>
        </div>
    </div>

    <br> <br> <br>-->

    </div>
    </div>

    </div>
</div>

