<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsCategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-goods-category-search"  style="margin-bottom: 10px;">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline'],//内联表单，可选值为：form-horizonta（水平排列）form-inline（内联表单）
        'fieldConfig'=>[
            'template'=>'{label}{input}',//表单域模板,可选值为：{label}\n{input}\n{hint}\n{error}
            'labelOptions'=>['class'=>'control-label'],
            'inputOptions'=>['class'=>'form-control','style'=>'border-radius:3px;margin:0 5px 0 5px;']
            ],
        
    ]); ?>

    <?= $form->field($model, 'goods_cat_id') ?>

    <?= $form->field($model, 'goods_cat_name') ?>

    <?= $form->field($model, 'goods_cat_pid') ?>

    <?= $form->field($model, 'goods_cat_img') ?>

    <?= $form->field($model, 'goods_cat_level') ?>

    <?php // echo $form->field($model, 'goods_cat_sort') ?>

    <?php // echo $form->field($model, 'unique_code') ?>

    <?php // echo $form->field($model, 'version_lock') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'logic_delete') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '搜索'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', '重置'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
