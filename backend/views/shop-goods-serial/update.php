<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsSerial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shop Goods Serial',
]) . $model->goods_serial_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Serials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goods_serial_id, 'url' => ['view', 'id' => $model->goods_serial_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shop-goods-serial-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
