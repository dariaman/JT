<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MServiceKategori */

$this->title = 'Create Mservice Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Mservice Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mservice-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
