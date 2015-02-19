<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model fonclub\router\models\Router */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="router-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'pattern')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'route')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'suffix')->textInput(['maxlength' => 50]) ?>

    <?php echo $form->field($model, 'defaults')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('router', 'Create') : Yii::t('router', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
