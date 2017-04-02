<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MKecamatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mkecamatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mkecamatan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mkecamatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kecamatanId',
            'kecamatanNama',
            'kotaId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
