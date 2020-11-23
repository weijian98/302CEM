<?php
/** @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Announcements';

$sql = 'select * from announcement order by id DESC';
$announcement =\app\models\Announcement::find()->all();
$print1 = [];
if($announcement != null ) {
    foreach ($announcement as $row) {
        $print1[] = $row;
    }

    $announcementCount = count($print1);
}
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

<div class="site-announcement">


    <div class="jumbotron" style="color:black">
        <h1><strong>Announcements</strong></h1> <hr> <br>

        <div class="body-content">

            <?php
            for($i =0; $i < $announcementCount;$i++){?>

                <div class="row">
                    <h2><?php
                     echo $print1[$i]['title'];
                     ?>
                    </h2>

                    <?php

                    echo $print1[$i]['text']. "<br><br><br><br>";
                    }
                    ?>


                </div>

            </div>

        </div>
    </div>


