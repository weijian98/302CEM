<?php

/* @var $this \yii\web\View */
/* @var $content string */
use app\models\User;

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'E-Event Ticket',
        'brandUrl' => array('/site/index'),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if(!Yii::$app->user->isGuest){
        $user = User::findOne(Yii::$app->user->identity->id);
    }
    if(Yii::$app->user->isGuest){
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Event', 'url' => ['/site/event']],
                ['label' => 'Contact Us', 'url' => ['/site/contact']],
                ['label' => 'Announcements', 'url' => ['/site/announcement']],
                ['label' => 'Signup', 'url' => ['/site/signup']],
                ['label' => 'LogIn', 'url' => ['/site/login']]
            ],
        ]);
    }else if($user->roles == "user"){
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Event', 'url' => ['/site/event']],
            ['label' => 'Announcement', 'url' => ['/site/announcement']],
            ['label' => 'Upcoming Event', 'url' => ['/site/bookevent']],
            ['label' => 'Booking History', 'url' => ['/site/bookinghistory']],
            ['label' => 'Contact Us', 'url' => ['/site/contact']],
            ['label' => 'Announcements', 'url' => ['/site/announcement']],
            Yii::$app->user->isGuest ? (
                ['label' => 'LogIn', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'LogOut (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    }else if($user->roles == "admin"){
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Manage Event', 'url' => ['/event']],
                ['label' => 'Manage Booking', 'url' => ['/booking']],
                ['label' => 'Manage Announcement', 'url' => ['/announcement']],
                Yii::$app->user->isGuest ? (
                ['label' => 'LogIn', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'LogOut (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);
    }
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<div class="clear"></div>

<div id="footer" class="footer" style="position: fixed; left:0;bottom:0;width:100%;text-align:center;">
        <p>&copy; E-Event Ticket <?= date('Y') ?>
            <br>
        <?= Yii::powered() ?></p>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
