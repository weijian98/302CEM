<?php

/** @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'E-Event Ticket';
?>

<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 30%;
        padding: 20px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;


    }
</style>


<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome</h1>    
        <p class="lead">View, Select and Book your event ticket now with E-Event Ticket</p>
        <p><a class="btn btn-lg btn-danger" href="<?php echo Url::to(['site/event']);?>">View Available Events</a></p>
    </div>


    <div class="jumbotron">
        <h2>Announcements</h2>

    </div>

    <div class="container">
        <div class="row">
                <div class="card" style="width:400px">
                    <div class="card-body">
                        <h3 class="card-title">Changes on concert event</h3>
                        <p class="card-text">Concert event has been postponed to 24th January 2021. Customers who have purchased tickets may request
                            for a refund by contacting customer service.</p>
                    </div>
                </div>
            </div>

    </div>


        <br> <br> <br>

    <div class="body-content">

    <div class="jumbotron">
        <h2>Popular Events October - November 2020</h2>    
 
    </div>

    </div>




    
   <!-- Card Events Display  -->
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-4">
        <div class="card" style="width:fit-content" >
            <img class="card-img-top" src="https://source.unsplash.com/JNuKyKXLh8U/350x300" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Concert Event</h4>
                <p class="card-text">Some example text.</p>
                <a href="<?php echo Url::to(['site/concert']);?>" class="btn btn-info stretched-link">More Detail</a>
    </div>
        </div>
            </div>

    <div class="col-12 col-lg-4">
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
    <br> <br> <br>
    
    </div>
    </div>

    </div>
</div>

