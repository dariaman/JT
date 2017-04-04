<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MKecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kecamatan-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'kecamatanNama')->textInput(['maxlength' => true]) ?>

<?=
    $form->field($model, 'kotaId')
     ->dropDownList(
            ArrayHelper::map(app\models\MKota::find()->asArray()->all(), 'kotaId', 'kotaNama'))
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
