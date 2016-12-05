<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopPayment */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shop Payment',
]) . $model->payment_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Payments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->payment_id, 'url' => ['view', 'id' => $model->payment_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shop-payment-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
