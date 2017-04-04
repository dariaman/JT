<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MShopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mshops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mshop-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mshop', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'shopId',
            'shopJudul',
            'shopStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
