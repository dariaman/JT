<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MKapasitasDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mkapasitas Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mkapasitas-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mkapasitas Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kapasitasId',
            'kapasitasJudul',
            'kapasitasHarga',
            'kapasitasStatus',
            'serviceDetailId',
            // 'kapasitasDeskripsi:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
