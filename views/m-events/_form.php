<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\MEvents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mevents-form">

   <?php $form = ActiveForm::begin([
    'id'=>$model->formName(),
    'layout' => 'horizontal'
   ]); ?>


    <?= $form->field($model, 'eventJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eventDeskripsi')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'eventTgl')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter  date ...'],
        'pluginOptions' => [
            'autoclose'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'eventGambarUrl')->textInput(['maxlength' => true]) ?>

      <?php
    if(!$model->isNewRecord){
    ?>



    <?= $form->field($model, 'eventStatus')->checkbox() ?>

    <?php
    }

    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
