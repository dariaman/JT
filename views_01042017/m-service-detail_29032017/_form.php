<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MServiceDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mservice-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'serviceDetailJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serviceDetailDeskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'serviceDetailGambar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serviceKategoriId')->textInput() ?>

    <?= $form->field($model, 'serviceId')->textInput() ?>

    <?= $form->field($model, 'serviceDetailStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
