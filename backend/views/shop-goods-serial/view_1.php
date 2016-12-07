<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopGoodsSerial */

$this->title = $model->goods_serial_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Goods Serials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-goods-serial-view">
    <h3>商品系列-基本信息</h3>
    <table class="table table-condensed">
        <tr><td>商品标题PC端</td><td>Apple MacBook Air 13.3英寸笔记本电脑 银色(Core i5 处理器/8GB内存/128GB SSD闪存 MMGF2CH)</td></tr>
        <tr><td>商品标题手机端</td><td>Apple MacBook Air 13.3英寸笔记本电脑 银色(Core i5 处理器/8GB内存/128GB SSD闪存 MMGF2CH)</td></tr>
        <tr><td>子标题PC端</td><td>Apple MacBook Air 13.3英寸笔记本电脑 银色(Core i5 处理器/8GB内存/128GB SSD闪存 MMGF2CH)</td></tr>
        <tr><td>子标题手机端</td><td>Apple MacBook Air 13.3英寸笔记本电脑 银色(Core i5 处理器/8GB内存/128GB SSD闪存 MMGF2CH)</td></tr>
    </table>
    <h3>商品系列-相册</h3>
    <div class="shop-goods-serial-form">
        <div class="form-group">
            <label class="col-lg-1">商品相册</label>
            <div class="col-lg-11">
                <span class="btn btn-lg btn-vk" data-toggle="modal" data-target="#modal-img">+</span>
            </div>
        </div>
    </div>
    
    
    <h3>商品系列-属性设置</h3>
    <table class="table table-bordered">
       <thead>
        <tr>
          <th>#</th>
          <th>属性</th>
          <th>价格</th>
        </tr>
        </thead>
        <tbody>
            <tr class="active">
          <td>1</td>
          <td>8G+红色</td>
          <td>4998元</td>
        </tr>
        <tr class="success">
          <td>2</td>
          <td>16G+白色</td>
          <td>5300元</td>
        </tr>
        
      </tbody>
    </table>
    <table class="table table-condensed">
        <tr><td>内存</td><td><select><option>8G</option><option>16G</option><option>32G</option></select></td></tr>
        <tr><td>颜色</td><td><select><option>红色</option><option>白色</option><option>绿色</option></select></td></tr>
        <tr><td>销售价</td><td><input type="text"/></td></tr>
        <tr><td></td><td><button class="btn btn-sm btn-success">添加</button></td></tr>
    </table>



</div>



<!--商品相册弹出框-->
<?php  
    \yii\bootstrap\Modal::begin([
    'id'=>'modal-img',
    'header'=>'<h4 class="modal-title"></h4>',
    'size'=>'modal-lg',
]);
    
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
    
        <?= $form->field($model, 'goods_serial_list_img_pc')->widget('pjkui\kindeditor\Kindeditor',['clientOptions'=>['allowFileManager'=>'true','allowImageUpload'=>'true'],'editorType'=>'image-dialog']) ?>
        
        <div class="form-group">
            <label class="col-lg-1"></label>
            <div class="col-lg-11">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '上传') : Yii::t('app', '上传2'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>


<?php
\yii\bootstrap\Modal::end();
?>
<!--/商品相册弹出框-->