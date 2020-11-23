<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'E-Event Ticket';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-mask">
    <div class="jumbotron">
        <h1>Japanese Theater and Festival Mask Event</h1>    
    </div>
    <div class="container" style="padding-bottom:20px">
        <div class="row">
            <div class="column" style="background-color:#EBEDEF ">
                <img class="center" src="https://source.unsplash.com/HuC3cii5VA8/350x300" alt="hackathon image" style="width:540px">
            </div>

            <div class="column" style="background-color:#EBEDEF  ">
            <h2 style="margin-top:5px">Ticket and Event Info</h2>
                <p style="text-align: justify">Japan Theater and Festival Mask Event coming back. This event which will be held on Feb 18, masks and only masks are the center of attention.
                The Japanese Theater and Festival Mask Event aims to become a hub where Japanese mask and theater culture is cultivated and transmitted.

Whether you're into traditional Japanese masks or contemporary creations, the Tokyo Mask Festival is sure to provide you with an exciting and memorable cultural experience.</p>
                <b style="font-size:16px">Date:</b> 
                <p> 18 Feb 2021, 1:30 PM  </p> 

                <b style="font-size:16px">Location:</b>
                <p> Edo Wonderladn, Nikkō-shi, Japan </p>

                <b style="font-size:16px">Price:</b>
                <p>RM 350</p>
                
                <b style="font-size:16px">Event Organizer</b>
                <p>Hyuga Tourism Association<br>
                Address: 1 Uemachi, Hyuga-shi, Miyazaki<br>
                Contact: 0982-55-0235</p> 
                <a href="<?php echo Url::to(['site/booking']);?>" class="btn btn-success stretched-link" style="width:100%">Find Tickets</a>
            </div>
    </div>
</div>