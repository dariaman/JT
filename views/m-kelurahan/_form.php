<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MKelurahan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kelurahan-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'kelurahanNama')->textInput(['maxlength' => true]) ?>

<?=
    $form->field($model, 'kecamatanId')
     ->dropDownList(
            ArrayHelper::map(app\models\MKecamatan::find()->asArray()->all(), 'kecamatanId', 'kecamatanNama'))
?>

    <?= $form->field($model, 'hargaDaerah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
