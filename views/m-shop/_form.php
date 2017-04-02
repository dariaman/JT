<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MShop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mshop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shopJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shopStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
