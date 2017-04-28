<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VoucherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vouchers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="voucher-index">
    
    <div class="voucher-form">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?php $form = ActiveForm::begin(['layout' => 'horizontal','action' => 'generate']); ?>
        <?= Html::label('Jumlah Voucher') ?>
        <?= Html::textInput('jumlah','',['class' => 'form-control' ,'style' => 'width:200px;']) ?>
        <?= Html::label('Nominal Voucher') ?>
        <?= Html::textInput('amount','',['class' => 'form-control','style' => 'width:200px;']) ?>

        <?php //$form->field($model, 'orderId')->textInput(['maxlength' => true]) ?>
        <br>
        <?= Html::submitButton('Generate' , ['class' => 'btn btn-success']) ?>
        
        <?php ActiveForm::end(); ?>
        <br>
    </div>
    
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'voucherNo',
            'amount',
            'orderId',

            ['class' => 'yii\grid\ActionColumn','template' => '{update}'],
        ],
    ]); ?>
    
    <p>
        <?php //Html::a('Tambah Voucher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
