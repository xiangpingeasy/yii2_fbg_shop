<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-goods-model-form">

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' =>[  
            'template' => "{label}\n<div class=\"col-lg-7\">{input}</div>\n<div class=\"col-lg-4\">{error}{hint}</div>",  
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
            'inputOptions' => ['class' => 'form-control','style'=>'border-radius:3px;'],
            ],
        ]); ?>

    <?= $form->field($model, 'goods_model_name')->textInput(['maxlength' => true])->hint('') ?>


    <div class="form-group">
        
    </div>
    <div class="form-group">
        <label class="col-lg-1"></label>
        <div class="col-lg-11">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '添加') : Yii::t('app', '修改'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
