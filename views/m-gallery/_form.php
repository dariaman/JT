<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MGallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mgallery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'galleriId')->textInput() ?>

    <?= $form->field($model, 'galleriJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'galleriDeskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'galleriTgl')->textInput() ?>

    <?= $form->field($model, 'galleriGambarUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'galleriDibuatTgl')->textInput() ?>

    <?= $form->field($model, 'galleriDibuatOleh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'galleriStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
