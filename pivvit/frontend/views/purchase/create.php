<?php

use yii\helpers\Html;
use \common\models\Offering;


/* @var $this yii\web\View */
/* @var $model common\models\Purchase */

$this->title = 'Create Purchase';
$this->params['breadcrumbs'][] = ['label' => 'Purchases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'offerings' =>Offering::find()->all(),
    ]) ?>
</div>
