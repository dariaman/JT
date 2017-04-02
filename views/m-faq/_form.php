<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MFaq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mfaq-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'faqJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faqDeskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faqStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
