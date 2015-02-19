<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model fonclub\router\models\Router */

$this->title = Yii::t('router', 'Update {modelClass}: ', [
    'modelClass' => 'Router',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('router', 'Routers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('router', 'Update');
?>
<div class="router-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
