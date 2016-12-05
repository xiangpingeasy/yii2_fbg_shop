<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsType */

$this->title = Yii::t('app', 'Create Shop Goods Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-goods-type-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
