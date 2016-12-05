<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopShipping */

$this->title = Yii::t('app', 'Create Shop Shipping');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Shippings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-shipping-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
