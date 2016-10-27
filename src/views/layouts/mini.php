<?php

use hiqdev\yii2\language\widgets\LanguageMenu;
use yii\web\View;

/**
 * @var yii\web\View $this View
 * @var string $content Content
 */

$this->registerJs(<<<'JS'
$(function () {
    $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
JS
, View::POS_READY);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->render('//layouts/_head') ?>
    </head>

    <body class="<?= empty($this->blocks['bodyClass']) ? 'login-page' : $this->blocks['bodyClass'] ?>">
    <?php $this->beginBody() ?>
        <?php if (Yii::$app->themeManager->hasWidget('Flashes')) : ?>
            <?= Yii::$app->themeManager->widget('Flashes') ?>
        <?php endif ?>

        <div class="login-box">
            <div class="login-logo">
                <b><?= Yii::$app->themeManager->widget('LogoLink') ?></b>
            </div>
            <?= $content ?>
        </div>

        <div class="footer-copyright">
            <div class="text-center small">
                <?= Yii::$app->themeManager->widget([
                    'class' => 'LanguageMenu',
                    'view' => 'miniLanguageMenu',
                ]) ?>
                &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>. All rights reserved.
                <br>
                <?= Yii::$app->themeManager->widget('PoweredBy') ?>
            </div>
        </div>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
