<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\widgets\Select2

/* @var $this yii\web\View */
/* @var $model app\models\MRekanJt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mrekan-jt-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'rekanNamaLengkap')->textInput(['maxlength' => true])->label('Nama Lengkap') ?>

    <?= $form->field($model, 'rekanKelamin')->widget(Select2::classname(), [
        'data' => ['P' => 'Pria','W' => 'Wanita'],
        'options' => ['placeholder' => '--Pilih Jenis Kelamin--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ])->label('Jenis Kelamin') ?>

    <?= $form->field($model, 'rekanSpesifikasi')->textInput(['maxlength' => true])->label('Spesifikasi') ?>

    <?= $form->field($model, 'rekanAlamat')->textarea(['rows' => 4])->label('Alamat') ?>

    <?= $form->field($model, 'rekanEmail')->textInput(['maxlength' => true])->label('Email') ?>

    <?= $form->field($model, 'rekanWebsite')->textInput(['maxlength' => true])->label('Website') ?>

<?=
    $form->field($model, 'rekanKota')
     ->dropDownList(
            ArrayHelper::map(app\models\MKota::find()->asArray()->all(), 'kotaId', 'kotaNama'))->label('Kota')
?>

<?=
    $form->field($model, 'rekanKelurahan')
     ->dropDownList(
            ArrayHelper::map(app\models\MKelurahan::find()->asArray()->all(), 'kelurahanId', 'kelurahanNama'))->label('Kelurahan')
?>

<?=
    $form->field($model, 'rekanKecamatan')
     ->dropDownList(
            ArrayHelper::map(app\models\MKecamatan::find()->asArray()->all(), 'kecamatanId', 'kecamatanNama'))->label('Kecamatan')
?>


    <?= $form->field($model, 'rekanDaerah')->textInput(['maxlength' => true])->label('Daerah') ?>

    <?= $form->field($model, 'rekanKodePos')->textInput(['maxlength' => true])->label('Kode Pos') ?>

    <?= $form->field($model, 'rekanNoHp')->textInput(['maxlength' => true])->label('No Hp') ?>

    <?= $form->field($model, 'rekanKendaraan')->textInput(['maxlength' => true])->label('Kendaraan') ?>

    <?= $form->field($model, 'rekanKendaraanNopol')->textInput(['maxlength' => true])->label('Nomor Polisi') ?>


<?= $form->field($model, 'rekanStatus')->checkbox(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
