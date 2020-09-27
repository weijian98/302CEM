<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'E-Event Ticket';

?>

<div class="site-event">
    <div class="jumbotron">
        <h1>Events</h1>    
    </div>

   <!-- Card Events Display  -->
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="https://source.unsplash.com/JNuKyKXLh8U/350x300" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Concert Event</h4>
                    <p class="card-text">Some example text.</p>
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

