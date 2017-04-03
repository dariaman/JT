<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="torder-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'orderTgl')->textInput() ?>

    <?= $form->field($model, 'orderJenisBayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderAlamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderKota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderKelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderKecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderDaerah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderKodePos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderAlamatNote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderGpsKoordinat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderBiayaTransport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderAlamatTambahanId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
