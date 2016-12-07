<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsSerial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-goods-serial-form">

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' =>[  
            'template' => "{label}\n<div class=\"col-lg-7\">{input}</div>\n<div class=\"col-lg-4\">{error}{hint}</div>",  
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
            'inputOptions' => ['class' => 'form-control','style'=>'border-radius:3px;'],
            ],
        ]); ?>

    <?= $form->field($model, 'goods_serial_name_pc')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'goods_serial_name_mobile')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'goods_serial_sub_name_pc')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'goods_serial_sub_name_mobile')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'goods_serial_now_price')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'goods_serial_before_price')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'goods_serial_list_img_pc')->widget('pjkui\kindeditor\Kindeditor',['clientOptions'=>['allowFileManager'=>'true','allowImageUpload'=>'true'],'editorType'=>'image-dialog']) ?>
    
    <?= $form->field($model, 'goods_serial_list_img_mobile')->widget('pjkui\kindeditor\Kindeditor',['clientOptions'=>['allowFileManager'=>'true','allowImageUpload'=>'true'],'editorType'=>'image-dialog']) ?>

    


    <?= $form->field($model, 'goods_serial_desc_pc')->widget('pjkui\kindeditor\KindEditor',
    ['clientOptions'=>['allowFileManager'=>'true',
    'allowUpload'=>'true']]) 
    ?>
    
    <?= $form->field($model, 'goods_serial_desc_mobile')->widget('pjkui\kindeditor\KindEditor',
    ['clientOptions'=>['allowFileManager'=>'true',
    'allowUpload'=>'true']]) 
    ?>
    
    <!--商品分类和品牌联动-->
    <?= $form->field($model, 'goods_category_id')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\ShopGoodsCategory::find()->all(),'goods_cat_id','goods_cat_name'),['prompt'=>'请选择商品分类'])->hint('') ?>


    <?php
        if($model->goods_brand_id==''){
        echo $form->field($model, 'goods_brand_id')->dropDownList(
            [],
            ['prompt' => '选择品牌']
        );}else{
            echo $form->field($model, 'goods_brand_id')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\ShopGoodsBrand::findAll(['goods_cat_id'=>$model->goods_category_id]),'goods_brand_id','goods_brand_name'),['prompt'=>'选择品牌'])->hint('');
        }
                ?>
    <!--/商品分类和品牌联动-->
   
    
    <?= $form->field($model, 'goods_model_id')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\ShopGoodsModel::find()->all(),'goods_model_id','goods_model_name'),['prompt'=>'请选择商品模型'])->hint('') ?>


    <?= $form->field($model, 'goods_type_id')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\ShopGoodsType::find()->all(),'goods_type_id','goods_type_name'),['prompt'=>'请选择商品类型'])->hint('') ?>

    

    <?= $form->field($model, 'payment_id')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\ShopPayment::find()->all(),'payment_id','payment_name'),['prompt'=>'请选择支付方式'])->hint('') ?>

    <?= $form->field($model, 'shipping_id')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\ShopShipping::find()->all(),'shipping_id','shipping_name'),['prompt'=>'请选择配送方式'])->hint('') ?>

    <?= $form->field($model, 'goods_serial_is_sale')->radioList(['1'=>'上架','0'=>'下架'], ['unselect'=>0,'tag'=>'div','style'=>'margin-top:5px;'])->hint('默认“下架”') ?>

    <?= $form->field($model, 'goods_serial_show_index')->radioList(['1'=>'推荐','0'=>'不推荐'], ['unselect'=>0,'tag'=>'div','style'=>'margin-top:5px;'])->hint('默认“不推荐”') ?>


    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'seo_keyword')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'seo_desc')->textInput(['maxlength' => true])->hint('') ?>

    <?= $form->field($model, 'seo_img_alt')->textInput(['maxlength' => true])->hint('') ?>


    <div class="form-group">
        
    </div>
    <div class="form-group">
        <label class="col-lg-1"></label>
        <div class="col-lg-11">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '保存 & 进入下一步') : Yii::t('app', '保存修改 & 进入下一步'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<!--商品分类和品牌联动-->
<?php \common\widgets\JsBlock::begin() ?>
<script>
        jQuery("#shopgoodsserial-goods_category_id").change(function () {
            var html = '';
            $.ajax({
                url: '<?= \yii\helpers\Url::to(["type-list"]) ?>',
                type: 'GET',
                dataType: 'json',
                data: {type: $(this).val()},
                success: function (msg) {
                    html += '<option value="">选择品牌</option>';
                    $.each(msg, function (key,val) {
                        html += '<option value="' + val.goods_brand_id + '">' + val.goods_brand_name + '</option>';
                    });
                    //alert(html);
                    $("#shopgoodsserial-goods_brand_id").html(html);
                }
            })
        });
</script>
<?php \common\widgets\JsBlock::end()?>
<!--/商品分类和品牌联动-->


