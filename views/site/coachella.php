<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
$this->title = 'E-Event Ticket';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-coachella">
    <div class="jumbotron">
        <h1>Coachella Music and Arts Event</h1>    
    </div>
    <div class="container" style="padding-bottom:20px">
        <div class="row">
            <div class="column" style="background-color:#EBEDEF ">
                <img class="center" src="https://source.unsplash.com/ab5jn3Ikj8M/350x300" alt="hackathon image" style="width:550px">
            </div>

            <div class="column" style="background-color:#EBEDEF  ">
            <h2 style="margin-top:5px">Ticket and Event Info</h2>
                <p style="text-align: justify">The Coachella Music and Arts festival commonly called Coachella or the Coachella Festival is coming to Indio in April 2021.
                Once again coachella is returning with a world-beating lineup of some of music's biggest stars, covering a range of genres, including rock, indie, hip-hop and dance.
                Coachella's illustrious history has seen it feature legendary headline sets from the likes of Beyoncé, Daft Punk, Prince, Radiohead, and Bob Dylan over its two decade-long lifespan.</p>
                <b style="font-size:16px">Date:</b> 
                <p> 9 Apr - 18 Apr 2021   </p> 

                <b style="font-size:16px">Location:</b>
                <p> Empire Polo Club,Indio </p>

                <b style="font-size:16px">Price:</b>
                <p> General Admission: RM 1500</p>
                <p> VIP: RM 3500</p>
                
                <b style="font-size:16px">Event Organizer</b>
                <p>Festicket<br>
                Address: Primary. 7 Chalcot Road. London, GB</p> 
                <a href="<?php echo Url::to(['site/booking']);?>" class="btn btn-success stretched-link" style="width:100%">Find Tickets</a>
				
            </div>
    </div>
</div>