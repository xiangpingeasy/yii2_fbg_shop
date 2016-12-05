<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsCategory */

$this->title = Yii::t('app', 'Create Shop Goods Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-goods-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
