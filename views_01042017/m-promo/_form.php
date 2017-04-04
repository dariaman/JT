<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MPromo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mpromo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'promoId')->textInput() ?>

    <?= $form->field($model, 'promoJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promoDeskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'promoTgl')->textInput() ?>

    <?= $form->field($model, 'promoGambarUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promoDibuatTgl')->textInput() ?>

    <?= $form->field($model, 'promoDibuatOleh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promoStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
