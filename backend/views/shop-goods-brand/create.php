<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsBrand */

$this->title = Yii::t('app', 'Create Shop Goods Brand');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Brands'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-goods-brand-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
