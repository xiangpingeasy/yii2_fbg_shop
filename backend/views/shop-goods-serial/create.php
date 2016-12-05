<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsSerial */

$this->title = Yii::t('app', 'Create Shop Goods Serial');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Serials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-goods-serial-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
