<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MService */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mservice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'serviceJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serviceStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
