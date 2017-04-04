<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MServiceKategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mservice Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mservice-kategori-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mservice Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'serviceKategoriId',
            'serviceKategoriJudul',
            'serviceKategoriGambarUrl:url',
            'serviceKategoriStatus',
            'serviceId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
