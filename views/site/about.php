<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\User;
use yii\helpers\Url;
use app\models\About;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
if(!Yii::$app->user->isGuest){
    $user = User::findOne(Yii::$app->user->identity->id);
}
$about = About::findOne(1);
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    if($user->roles == "admin") {
        ?>
        <a style=" color:inherit; text-decoration: none;" href="<?php echo Url::to(['/about/update?id=1']); ?>">
            <button>Edit</button>
        </a>
        <?php
    }

    ?>
    <?php
    echo $about['about'];
    ?>
</div>
