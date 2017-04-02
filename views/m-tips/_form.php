<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MTips */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtips-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipsId')->textInput() ?>

    <?= $form->field($model, 'tipsJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipsDeskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tipsDibuatTgl')->textInput() ?>

    <?= $form->field($model, 'tipsDibuatOleh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipsStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
