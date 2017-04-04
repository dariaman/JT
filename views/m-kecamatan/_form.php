<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\MKecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mkecamatan-form">

   <?php $form = ActiveForm::begin([
        'id'=>$model->formName(),
        'layout' => 'horizontal'
    ]); ?>

    <?= $form->field($model, 'kecamatanNama')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'kotaId')->widget(Select2::classname(), [
        'data' => $data_kota,
        'options' => ['placeholder' => 'Select a ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
