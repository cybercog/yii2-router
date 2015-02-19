<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model fonclub\router\models\Router */

$this->title = Yii::t('router', 'Create {modelClass}', [
    'modelClass' => 'Router',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('router', 'Routers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="router-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
