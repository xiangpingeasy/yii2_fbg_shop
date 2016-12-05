<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsModel */

$this->title = Yii::t('app', 'Create Shop Goods Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-goods-model-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
