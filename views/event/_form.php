<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'event_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'event_date')->widget(\yii\jui\DatePicker::classname(), [
        'clientOptions' =>[
            'dateFormat' => 'dd-MM-yyyy',
            'minDate' => '+0d',
        ],
        'options' => ['class' => 'form-control']])?>
    <?= $form->field($model, 'event_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_time')->textInput(['type' => 'time']) ?>

    <?= $form->field($model, 'event_duration')->textInput() ?>

    <?= $form->field($model, 'event_totalseats')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'event_organizer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'event_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'event_ticket_price')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'event_picture')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic',
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