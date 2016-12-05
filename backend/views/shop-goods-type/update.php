<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shop Goods Type',
]) . $model->goods_type_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goods_type_id, 'url' => ['view', 'id' => $model->goods_type_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shop-goods-type-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
