<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopPayment */

$this->title = Yii::t('app', 'Create Shop Payment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Payments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-payment-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
