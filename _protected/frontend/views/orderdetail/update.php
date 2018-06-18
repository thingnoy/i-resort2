<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Orderdetail */

$this->title = 'Update Orderdetail: ' . $model->ODid;
$this->params['breadcrumbs'][] = ['label' => 'Orderdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ODid, 'url' => ['view', 'id' => $model->ODid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orderdetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
