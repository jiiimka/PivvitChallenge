<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Purchase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'offeringID')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
