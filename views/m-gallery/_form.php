<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\MGallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin([
    'layout' => 'horizontal',]); ?>

    <?= $form->field($model, 'galleriJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'galleriDeskripsi')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'galleriTgl')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tgl Galery'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'dd M yyyy'
    ]])?>

    <?= $form->field($model, 'galleriGambarUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'galleriStatus')->checkbox(); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
