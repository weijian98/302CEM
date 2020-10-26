<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'Book Event Details';
?>

<div class="site-bookEvent">

<div class="jumbotron">
        <h1>Welcome</h1>    
        <p class="lead">View, Select and Book your event ticket now with E-Event Ticket</p>
        <p><a class="btn btn-lg btn-danger" href="<?php echo Url::to(['site/event']);?>">View Available Events</a></p>
    </div>

    <div class="body-content">

    <div class="jumbotron">
        <h2>Popular Events October - November 2020</h2>    
 
    </div> 
    
   <!-- Card Events Display  -->
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-4">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="https://source.unsplash.com/JNuKyKXLh8U/350x300" alt="Card image">
            <div class="card-body">
                <h4 class="card-title"><strong> Event</strong></h4>
                <p class="card-text">New York, 22 December 2020</p>
                <a href="<?php echo Url::to(['site/concert']);?>" class="btn btn-info stretched-link">More Detail</a>
    </div>
        </div>
            </div>

    <div class="col-12 col-lg-4">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="https://source.unsplash.com/gpU4HPldblo/350x300" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Musuem Event</h4>
                <p class="card-text">Some example text.</p>
                <a href="<?php echo Url::to(['site/museum']);?>" class="btn btn-info stretched-link">More Detail</a>
    </div>
        </div>
            </div>

    <div class="col-12 col-lg-4">
        <div class="card" style="width:400px">
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
    <br> <br> <br>
    
    </div>
    </div>

    </div>
</div>

