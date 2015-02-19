<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('router', 'Routers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="router-index">


    <p>
        <?= Html::a(Yii::t('router', 'Create {modelClass}', [
    'modelClass' => 'Router',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pattern',
            'route',
            'suffix',
            'defaults',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
