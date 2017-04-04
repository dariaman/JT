<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MServiceDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mservice Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mservice-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mservice Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'serviceDetailId',
            'serviceDetailJudul',
            'serviceDetailDeskripsi:ntext',
            'serviceDetailGambar',
            'serviceKategoriId',
            // 'serviceId',
            // 'serviceDetailStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
