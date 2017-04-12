<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Purchase */
/* @var $offerings common\models\Offering[] */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customerName')->textInput(['maxlength' => true]) ?>

    <?php
    $offeringOptions = [];
    $offeringParams = [];
    foreach ($offerings as $offering) {
        $offeringOptions[$offering->id] = $offering->title;
        $offeringParams[$offering->id] = ['data-price' => $offering->price];
    }
    ?>

    <?= $form->field($model, 'offeringID')->dropDownList($offeringOptions, $offeringParams) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= Html::tag('h4', 'Total Amount: ', ['class' => 'text-bold']) ?>

    <?= Html::tag('span', 10, ['id' => 'total']) ?>

    <br>
    <br>
    <br>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
