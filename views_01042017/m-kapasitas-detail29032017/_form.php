<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MKapasitasDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mkapasitas-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kapasitasJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitasHarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitasStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serviceDetailId')->textInput() ?>

    <?= $form->field($model, 'kapasitasDeskripsi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
