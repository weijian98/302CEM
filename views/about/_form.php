<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'about')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced',
        'kcfinder' => true,
        'kcfOptions' => [
            'uploadURL' => '@web/upload/event',
            'uploadDir' => '@webroot/upload/event',
            'access' => [  // @link http://kcfinder.sunhater.com/install#_access
                'files' => [
                    'upload' => true,
                    'delete' => true,
                    'copy' => true,
                    'move' => true,
                    'rename' => true,
                ],
                'dirs' => [
                    'create' => true,
                    'delete' => true,
                    'rename' => true,
                ],
            ],
            'types' => [  // @link http://kcfinder.sunhater.com/install#_types
                'files' => [
                    'type' => '',
                ],
            ],
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
