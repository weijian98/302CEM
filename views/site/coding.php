<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
$this->title = 'E-Event Ticket';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-coding">
    <div class="jumbotron">
        <h1>Coding Event</h1>    
    </div>
    <div class="container" style="padding-bottom:20px">
        <div class="row">
            <div class="column" style="background-color:#EBEDEF ">
                <img class="center" src="https://source.unsplash.com/rxpThOwuVgE/350x300" alt="coding image" style="width:468px">
            </div>

            <div class="column" style="background-color:#EBEDEF  ">
            <h2 style="margin-top:5px">Ticket and Event Info</h2>
                <p style="text-align: justify">The Most Comprehensive & Complete Web Programming Course is back by demand. A lifetime-warranty and support course designed for beginners.</p>
                <b style="font-size:16px">Date:</b> 
                <p> 12 Dec 2020, 8:30am </p> 

                <b style="font-size:16px">Location:</b>
                <p> SVOFO, Petaling Jaya </p>

                <b style="font-size:16px">Price:</b>
                <p>RM 1000</p>
                
                <b style="font-size:16px">Event Organizer</b>
                <p>LEAD<br>
                Address: Level 11, Menara KEN TTDI, No.37 Jalan Burhanuddin Helmi, Taman Tun Dr. Ismail<br>
                Contact: +6016-473 7281 </p> 
                <a href="<?php echo Url::to(['site/booking']);?>" class="btn btn-success stretched-link" style="width:100%">Find Tickets</a>
            </div>
    </div>
</div>