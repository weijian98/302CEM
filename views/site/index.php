<?php

/** @var $this yii\web\View */
use yii\helpers\Url;
use app\models\Event;
use app\models\Booking;
$this->title = 'E-Event Ticket';


?>



<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 30%;
        padding: 10px;

    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }



</style>








<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome</h1>    
        <p class="lead">View, Select and Book your event ticket now with E-Event Ticket</p>
        <p><a class="btn btn-lg btn-danger" href="<?php echo Url::to(['site/event']);?>">View Available Events</a></p>
    </div>






        <br> <br> <br>

    <div class="body-content">

    <div class="jumbotron">
        <h2>Popular Events</h2>

    </div>

    </div>

    <!-- Card Events Display  -->
    <div class="container">
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
        <?php
        if($eventcount >6){
            $eventcount = 6;
        }
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
                <div class="card" style="width:fit-content" >
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
            <!--<div class="col-12 col-lg-4">
                <div class="card" style="width:fit-content">
                    <img class="card-img-top" src="https://source.unsplash.com/gpU4HPldblo/350x300" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Musuem Event</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="<?php echo Url::to(['site/museum']);?>" class="btn btn-info stretched-link">More Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card" style="width:fit-content">
                    <img class="card-img-top" src="https://source.unsplash.com/ab5jn3Ikj8M/350x300" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Coachella Music and Arts Event</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="<?php echo Url::to(['site/coachella']);?>" class="btn btn-info stretched-link">More Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card" style="width:fit-content">
                    <img class="card-img-top" src="https://source.unsplash.com/rxpThOwuVgE/350x300" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Coding Event</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="<?php echo Url::to(['site/coding']);?>" class="btn btn-info stretched-link">More Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card" style="width:fit-content">
                    <img class="card-img-top" src="https://source.unsplash.com/ourQHRTE2IM/350x300" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Hackathon Event</h4>
                        <p class="card-text">Located in London, United Kingdom</p>
                        <a href="<?php echo Url::to(['site/hackathon']);?>" class="btn btn-info stretched-link">More Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card" style="width:fit-content" >
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




    


