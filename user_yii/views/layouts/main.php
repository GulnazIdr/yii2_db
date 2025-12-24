<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" data-bs-theme="dark">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => ['class' => 'navbar navbar-expand-lg navbar-dark bg-dark shadow-sm']
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav ms-auto'],
                'items' => [
                    ['label' => 'Course', 'url' => ['/course/index']],
                    ['label' => 'Category', 'url' => ['/category/index']],
                    ['label' => 'Users', 'url' => ['/user/index']], 
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    ['label' => 'Register', 'url' => ['/site/signup']],
                    Yii::$app->user->isGuest
                        ? ['label' => 'Login', 'url' => ['/site/login']]
                        : '<li class="nav-item">'
                            . Html::beginForm(['/site/logout'])
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'nav-link btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>'
                ]
            ]);
            NavBar::end();
            ?>
        </div>
    </header>

    <main class="container py-4">
        <?= $content ?>
    </main>

    <footer class="footer bg-dark text-light p-3 text-center border-top border-secondary">
        &copy; <?= date('Y') ?>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
