<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsSerialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-goods-serial-search"  style="margin-bottom: 10px;">

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

    <?= $form->field($model, 'goods_serial_id') ?>

    <?= $form->field($model, 'goods_serial_name_pc') ?>

    <?= $form->field($model, 'goods_serial_name_mobile') ?>

    <?= $form->field($model, 'goods_serial_sub_name_pc') ?>

    <?= $form->field($model, 'goods_serial_sub_name_mobile') ?>

    <?php // echo $form->field($model, 'goods_serial_now_price') ?>

    <?php // echo $form->field($model, 'goods_serial_before_price') ?>

    <?php // echo $form->field($model, 'goods_serial_list_img_pc') ?>

    <?php // echo $form->field($model, 'goods_serial_list_img_mobile') ?>

    <?php // echo $form->field($model, 'goods_serial_desc_pc') ?>

    <?php // echo $form->field($model, 'goods_serial_desc_mobile') ?>

    <?php // echo $form->field($model, 'goods_category_id') ?>

    <?php // echo $form->field($model, 'goods_model_id') ?>

    <?php // echo $form->field($model, 'goods_type_id') ?>

    <?php // echo $form->field($model, 'goods_brand_id') ?>

    <?php // echo $form->field($model, 'payment_id') ?>

    <?php // echo $form->field($model, 'shipping_id') ?>

    <?php // echo $form->field($model, 'goods_serial_is_sale') ?>

    <?php // echo $form->field($model, 'goods_serial_show_index') ?>

    <?php // echo $form->field($model, 'goods_serial_comment_count') ?>

    <?php // echo $form->field($model, 'goods_serial_sale_count') ?>

    <?php // echo $form->field($model, 'goods_serial_best_comment_count') ?>

    <?php // echo $form->field($model, 'goods_serial_well_comment_count') ?>

    <?php // echo $form->field($model, 'goods_serial_bad_comment_count') ?>

    <?php // echo $form->field($model, 'goods_serial_visit_count') ?>

    <?php // echo $form->field($model, 'goods_serial_share_count') ?>

    <?php // echo $form->field($model, 'goods_serial_collect_count') ?>

    <?php // echo $form->field($model, 'seo_title') ?>

    <?php // echo $form->field($model, 'seo_keyword') ?>

    <?php // echo $form->field($model, 'seo_desc') ?>

    <?php // echo $form->field($model, 'seo_img_alt') ?>

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
