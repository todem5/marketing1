<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <!-- <header id="header"> -->


        <?php
    //   NavBar::begin([
    //     'brandLabel' => '<img src="img/sitelogo.png">',
    //     //'brandLabel' => Yii::$app->name,
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'brandOptions' => ['class' => 'navbar-brand'],
    //     'options' => ['class' => 'navbar-expand-md navbar-light bg-light fixed-top']
    // ]);
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav'],
    //     'items' => [
    //         ['label' => 'Услуги', 'url' => ['/site/index']],
    //         ['label' => 'О нас', 'url' => ['/site/about']],
    //         ['label' => 'Контакты', 'url' => ['/site/contact']],
    //         // Yii::$app->user->isGuest
    //         //     ? ['label' => 'Login', 'url' => ['/site/login']]
    //         //     : '<li class="nav-item">'
    //         //         . Html::beginForm(['/site/logout'])
    //         //         . Html::submitButton(
    //         //             'Logout (' . Yii::$app->user->identity->username . ')',
    //         //             ['class' => 'nav-link btn btn-link logout']
    //         //         )
    //         //         . Html::endForm()
    //         //         . '</li>'
    //     ]
    // ]);
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav ms-auto mb-2 mb-lg-0', 'id' => 'main_menu'],
    //     'items' => [
    //         '<li class="nav-item">',
    //         '<a class="nav-link messengers__link--wa" href="https://wa.me/+79956041102" target="_blank" title="WhatsApp чат">
    //             <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
    //                 <path d="M5.43976 13.8705L5.98276 14.1877C6.89846 14.7218 7.93995 15.0022 9.00001 15C10.1867 15 11.3467 14.6481 12.3334 13.9888C13.3201 13.3295 14.0892 12.3925 14.5433 11.2961C14.9974 10.1997 15.1162 8.99334 14.8847 7.82946C14.6532 6.66557 14.0818 5.59647 13.2427 4.75736C12.4035 3.91824 11.3344 3.3468 10.1706 3.11529C9.00667 2.88378 7.80027 3.0026 6.70391 3.45672C5.60755 3.91085 4.67048 4.67988 4.01119 5.66658C3.3519 6.65327 3.00001 7.81331 3.00001 9C3.00001 10.077 3.28276 11.1097 3.81301 12.018L4.12951 12.561L3.63976 14.3617L5.43976 13.8705ZM1.50301 16.5L2.51701 12.774C1.84886 11.6286 1.49783 10.326 1.50001 9C1.50001 4.85775 4.85776 1.5 9.00001 1.5C13.1423 1.5 16.5 4.85775 16.5 9C16.5 13.1423 13.1423 16.5 9.00001 16.5C7.67459 16.5021 6.3725 16.1514 5.22751 15.4838L1.50301 16.5ZM6.29326 5.481C6.39376 5.4735 6.49501 5.4735 6.59551 5.478C6.63601 5.481 6.67651 5.4855 6.71701 5.49C6.83626 5.5035 6.96751 5.57625 7.01176 5.67675C7.23526 6.18375 7.45276 6.6945 7.66276 7.20675C7.70926 7.32075 7.68151 7.467 7.59301 7.6095C7.53214 7.70586 7.46631 7.79898 7.39576 7.8885C7.31101 7.99725 7.12876 8.19675 7.12876 8.19675C7.12876 8.19675 7.05451 8.28525 7.08301 8.3955C7.09351 8.4375 7.12801 8.49825 7.15951 8.54925L7.20376 8.6205C7.39576 8.94075 7.65376 9.2655 7.96876 9.5715C8.05876 9.6585 8.14651 9.74775 8.24101 9.831C8.59201 10.1407 8.98951 10.3935 9.41851 10.581L9.42226 10.5825C9.48601 10.6102 9.51826 10.6252 9.61126 10.665C9.65776 10.6845 9.70576 10.7017 9.75451 10.7145C9.80489 10.7273 9.85794 10.7249 9.90694 10.7076C9.95595 10.6902 9.99869 10.6587 10.0298 10.617C10.5728 9.95925 10.6223 9.9165 10.6268 9.9165V9.918C10.6645 9.88282 10.7093 9.85611 10.7582 9.83968C10.8071 9.82325 10.8589 9.81748 10.9103 9.82275C10.9553 9.82575 11.001 9.834 11.043 9.85275C11.4413 10.035 12.093 10.3193 12.093 10.3193L12.5295 10.515C12.603 10.5503 12.6698 10.6335 12.672 10.7137C12.675 10.764 12.6795 10.845 12.6623 10.9935C12.6383 11.1877 12.5798 11.421 12.5213 11.5433C12.4812 11.6267 12.428 11.7031 12.3638 11.7697C12.2881 11.8492 12.2052 11.9215 12.1163 11.9858C12.0855 12.0089 12.0542 12.0314 12.0225 12.0532C11.9292 12.1124 11.8334 12.1675 11.7353 12.2183C11.5422 12.3208 11.3289 12.3797 11.1105 12.3907C10.9718 12.3982 10.833 12.4087 10.6935 12.4012C10.6875 12.4012 10.2675 12.336 10.2675 12.336C9.2012 12.0555 8.21505 11.5301 7.38751 10.8015C7.21801 10.6523 7.06126 10.4917 6.90076 10.332C6.23326 9.66825 5.72926 8.952 5.42326 8.2755C5.26664 7.94347 5.18203 7.58205 5.17501 7.215C5.17192 6.75964 5.32077 6.31625 5.59801 5.955C5.65276 5.8845 5.70451 5.811 5.79376 5.72625C5.88901 5.63625 5.94901 5.58825 6.01426 5.55525C6.10102 5.51177 6.19566 5.48626 6.29251 5.48025L6.29326 5.481Z"></path>
    //             </svg>
    //         </a>',
    //         '</li>',
    //         '<li class="nav-item">',
    //         '<a class="nav-link messengers__link--tg" href="https://t.me/+79956041102" target="_blank" title="Telegram чат">
    //             <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
    //                 <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2906 0.312459C12.7062 0.574959 6.11875 3.61996 0.753125 6.08746C0.328125 6.29746 0.0625 6.71746 0.0625 7.13746C0.0625 7.55746 0.38125 7.87246 0.753125 7.92496C1.07187 7.97746 4.25937 8.44996 4.25937 8.44996L5.1625 13.7L5.64062 11.39L4.95 7.92496L11.4312 3.19996L6.11875 8.97496L7.97812 11.075C8.08437 11.18 10.3687 13.805 10.5281 13.9625C10.7937 14.225 11.2187 14.75 11.4312 14.75C11.8031 14.75 12.175 14.225 12.3344 13.4375C12.4937 12.7025 13.5562 7.60996 14.8844 0.83746C15.0437 0.102459 14.3531 -0.212541 13.2906 0.312459Z"></path>
    //             </svg>
    //         </a>',
    //         '</li>',
    //         '<li class="nav-item">',
    //         '<a class="nav-link" href="tel:+7 913 147-7250" title="Позвонить">+7 ххх ххх-хххх</a>',
    //         '</li>',
            
    //     ]
    // ]);
    // NavBar::end();
    ?>

        <div class="page">
            <div class="page__wrapper">
                <header class="page__header header">
                    <div class="header__scroll-top">
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>
                    <div class="header__bg-overlay"></div>
                    <div class="header__wrapper">
                        <div class="header__bottom bottom-header">
                            <div class="bottom-header__container container">
                                <div class="bottom-header__content">
                                    <div class="bottom-header__logo">
                                        <a href="https://gigo.expert/" class="main-logo"><img src="img/sitelogo.png"
                                                alt="маркетинговое агенство" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>


        <!-- <div class="menu-bottom">
            <div class="container">
                <a href="#"> </a>
                <div class="menu-bottom__hamburger">

                </div>
                <div class="menu-bottom__catalog">
                </div>
            </div>
        </div>

    </header> -->

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer id="footer" class="mt-auto py-3 bg-light">
        <div class="container">
            <div class="row text-muted">
                <div class="col-md-6 text-center text-md-start">&copy; GIGO <?= date('Y') ?></div>
                <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>