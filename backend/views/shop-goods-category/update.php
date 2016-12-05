<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shop Goods Category',
]) . $model->goods_cat_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goods_cat_id, 'url' => ['view', 'id' => $model->goods_cat_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shop-goods-category-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
