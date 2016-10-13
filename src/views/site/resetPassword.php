<?php

/** @var yii\web\View $this */

$this->title = Yii::t('hisite', 'Reset password');
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Yii::$app->themeManager->widget([
    'class' => 'LoginForm',
    'model' => $model,
    'message' => Yii::t('hisite', 'Please choose your new password'),
]) ?>
