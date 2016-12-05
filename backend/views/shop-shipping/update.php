<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopShipping */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shop Shipping',
]) . $model->shipping_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Shippings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shipping_id, 'url' => ['view', 'id' => $model->shipping_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shop-shipping-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
