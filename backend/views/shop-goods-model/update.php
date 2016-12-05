<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shop Goods Model',
]) . $model->goods_model_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goods_model_id, 'url' => ['view', 'id' => $model->goods_model_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shop-goods-model-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
