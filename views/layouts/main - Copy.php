<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Jago Tukang',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            [
                'label' => 'Service', 'url' => ['/m-service'],
                'items' =>[
                    ['label' => 'Service', 'url' => ['/m-service']],
                    ['label' => 'Service Kategori', 'url' => ['/m-service-kategori']],
                    ['label' => 'Service Detail', 'url' => ['/m-service-detail']],
                    ['label' => 'Kapasitas Detail', 'url' => ['/m-kapasitas-detail']],
                ],
            ],
            [
                'label' => 'Daerah',
                'items' =>[
                    ['label' => 'Kelurahan', 'url' => ['/m-kelurahan']],
                    ['label' => 'Kecamatan', 'url' => ['/m-kecamatan']],                    
                    ['label' => 'Kota', 'url' => ['/m-kota']],
                ],
            ],
            [
                'label' => 'Shop',
                'items' =>[
                    ['label' => 'Shop', 'url' => ['/m-shop']],
                    ['label' => 'Shop detail', 'url' => ['/m-shop-detail']],
                    ['label' => 'Slide Show', 'url' => ['/m-slide-show']],
                ],
            ],            
            ['label' => 'Gallery', 'url' => ['/m-gallery']],
            ['label' => 'InternetBanking', 'url' => ['/m-internet-banking']],
            ['label' => 'KartuDebit', 'url' => ['/m-kartu-debit']],
            ['label' => 'Rekan JagoTukang', 'url' => ['/m-rekan-jt']],
            ['label' => 'Order', 'url' => ['/t-order']],
            [
                'label' => 'info',
                'items' =>[
                    ['label' => 'Promo', 'url' => ['/m-promo']],
                    ['label' => 'tips', 'url' => ['/m-tips']],
                    ['label' => 'testimoni', 'url' => ['/m-testimoni']],
                    ['label' => 'Faq', 'url' => ['/m-faq']],
                ],
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Jago Tukang <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
