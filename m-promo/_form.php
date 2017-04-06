<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\MPromo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mpromo-form">

    <?php $form = ActiveForm::begin([
        'id'=>$model->formName()
        'layout' => 'horizontal'

   ]); ?>


    <?= $form->field($model, 'promoJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promoDeskripsi')->textarea(['rows' => 6]) ?>

     <?= $form->field($model, 'promoTgl')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter  date ...'],
        'pluginOptions' => [
            'autoclose'=>true
        ]
    ]) ?>


    <?= $form->field($model, 'promoGambarUrl')->textInput(['maxlength' => true]) ?>


 <?php
    if(!$model->isNewRecord){
    ?>


    <?= $form->field($model, 'promoStatus')->checkbox(); ?>

    <?php
}

    ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
