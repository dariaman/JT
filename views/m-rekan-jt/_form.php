<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\MRekanJt */
/* @var $form yii\widgets\ActiveForm */

$kota = ArrayHelper::map(app\models\MKota::find()->asArray()->all(), 'kotaId', 'kotaNama');
$kelurahan = ArrayHelper::map(app\models\MKelurahan::find()->asArray()->all(), 'kelurahanId', 'kelurahanNama');
$kecamatan = ArrayHelper::map(app\models\MKecamatan::find()->asArray()->all(), 'kecamatanId', 'kecamatanNama');
?>

<div class="mrekan-jt-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'rekanNamaLengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKelamin')->widget(Select2::classname(), [
        'data' => ['P' => 'Pria','W' => 'Wanita'],
        'options' => ['placeholder' => '--Pilih Jenis Kelamin--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]) 
    ?>

    <?= $form->field($model, 'rekanSpesifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanAlamat')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'rekanEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanWebsite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKota')->widget(Select2::classname(), [
        'data' => $kota,
        'options' => ['placeholder' => '--Pilih Kota--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]) 
    ?>

    <?=
        $form->field($model, 'rekanKelurahan')->widget(Select2::classname(), [
        'data' => $kelurahan,
        'options' => ['placeholder' => '--Pilih Kelurahan--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ])
    ?>

    <?=
        $form->field($model, 'rekanKecamatan')->widget(Select2::classname(), [
        'data' => $kecamatan,
        'options' => ['placeholder' => '--Pilih Kecamatan--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ])
    ?>


    <?= $form->field($model, 'rekanDaerah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKodePos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanNoHp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekanKendaraanNopol')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'rekanStatus')->checkbox(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
