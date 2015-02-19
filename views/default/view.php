<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model fonclub\router\models\Router */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('router', 'Routers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="router-view">

    <p>
        <?= Html::a(Yii::t('router', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('router', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('router', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pattern',
            'route',
            'suffix',
            'defaults',
        ],
    ]) ?>

</div>
