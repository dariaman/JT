<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MShop */

$this->title = $model->shopId;
$this->params['breadcrumbs'][] = ['label' => 'Mshops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mshop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->shopId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->shopId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'shopId',
            'shopJudul',
            'shopStatus',
        ],
    ]) ?>

</div>
