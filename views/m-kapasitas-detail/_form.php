<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use kartik\money\MaskMoney;
use app\models\MServiceDetail;

/* @var $this yii\web\View */
/* @var $model app\models\MKapasitasDetail */
/* @var $form yii\widgets\ActiveForm */

$dataservicedetail = ArrayHelper::map(MServiceDetail::find()->all(),'serviceDetailId','serviceDetailJudul');
?>

<div class="mkapasitas-detail-form">

    <?php $form = ActiveForm::begin([
        'id'=>$model->formName(),
        'layout' => 'horizontal',
    ]); ?>

    <?= $form->field($model, 'kapasitasJudul')->textInput(['maxlength' => true]) ?>

   <?=  $form->field($model, 'kapasitasHarga')->widget(MaskMoney::classname(), [
        'pluginOptions' => [
            'prefix' => 'RP ',
            'allowNegative' => false
        ]
    ]) ?>

    <?= $form->field($model, 'serviceDetailId')->widget(Select2::classname(), [
        'data' => $dataservicedetail,
        'options' => ['placeholder' => '--Pilih Service Detail--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Service') ?>

    <?= $form->field($model, 'kapasitasDeskripsi')->textarea(['rows' => 6]) ?>
        
    <?php
    if(!$model->isNewRecord){
    ?>

    <?= $form->field($model, 'kapasitasStatus')->checkbox() ?>

    <?php
    }

    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
