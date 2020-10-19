<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'E-Event Ticket';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-museum">
    <div class="jumbotron">
        <h1>Museum Event</h1>    
    </div>
    <div class="container" style="padding-bottom:20px">
        <div class="row">
            <div class="column" style="background-color:#EBEDEF ">
                <img class="center" src="https://source.unsplash.com/gpU4HPldblo/350x300" alt="museum image" style="width:468px">
            </div>

            <div class="column" style="background-color:#EBEDEF  ">
            <h2 style="margin-top:5px">Ticket and Event Info</h2>
                <p style="text-align: justify">Join us on our first virtual Insights Tour featuring Charleen Leo from ArtScience Museum’s Exhibition team. Explore Museum and exhibitions from the comfort of your home.</p>
                <b style="font-size:16px">Date:</b> 
                <p> 20 Oct 2020, 09.00am </p> 

                <b style="font-size:16px">Location:</b>
                <p> ArtScience Museum </p>

                <b style="font-size:16px">Price:</b>
                <p>Free</p>
                
                <b style="font-size:16px">Event Organizer</b>
                <p>ArtScience Museum<br>
                Address: 10 Bayfront Avenue, Singapore 018956.<br>
                Contact: +652-2728 1008 </p> 
                <a href="<?php echo Url::to(['site/booking']);?>" class="btn btn-success stretched-link" style="width:100%">Find Tickets</a>
            </div>
    </div>
</div>