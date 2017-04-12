<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Offering */

$this->title = 'Create Offering';
$this->params['breadcrumbs'][] = ['label' => 'Offerings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offering-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
