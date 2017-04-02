<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MRekanJt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mrekan-jt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rekanNamaLengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanSpesifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanAlamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanWebsite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanDaerah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKodePos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanNoHp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKendaraanNopol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
