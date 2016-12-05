<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsBrand */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shop Goods Brand',
]) . $model->goods_brand_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Brands'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goods_brand_id, 'url' => ['view', 'id' => $model->goods_brand_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shop-goods-brand-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
