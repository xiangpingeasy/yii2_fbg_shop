<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopGoodsSerialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Shop Goods Serials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-goods-serial-index">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>'{items}<div style="width:50%;float:left;">{summary}</div><div style="width:50%;float:left;"><div style="float:right;">{pager}</div></div><div style="clear:both;"></div>',
        'summary'=>'当前第{page}/{pageCount}页 共{totalCount}条记录',
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //表字段
            'goods_serial_id',
            'goods_serial_name_pc',
            'goods_serial_name_mobile',
            'goods_serial_sub_name_pc',
            'goods_serial_sub_name_mobile',
            // 'goods_serial_now_price',
            // 'goods_serial_before_price',
            // 'goods_serial_list_img_pc',
            // 'goods_serial_list_img_mobile',
            // 'goods_serial_desc_pc:ntext',
            // 'goods_serial_desc_mobile:ntext',
            // 'goods_category_id',
            // 'goods_model_id',
            // 'goods_type_id',
            // 'goods_brand_id',
            // 'payment_id',
            // 'shipping_id',
            // 'goods_serial_is_sale',
            // 'goods_serial_show_index',
            // 'goods_serial_comment_count',
            // 'goods_serial_sale_count',
            // 'goods_serial_best_comment_count',
            // 'goods_serial_well_comment_count',
            // 'goods_serial_bad_comment_count',
            // 'goods_serial_visit_count',
            // 'goods_serial_share_count',
            // 'goods_serial_collect_count',
            // 'seo_title',
            // 'seo_keyword',
            // 'seo_desc',
            // 'seo_img_alt',
            // 'unique_code',
            // 'version_lock',
            // 'create_time',
            // 'update_time',
            // 'logic_delete',
            //操作按钮
            [ 
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'headerOptions' => ['width' => '135','style'=>'text-align:center;'],
                'template' => '<span style="display:inline-block;width:33%;text-align:center;">{view}</span><span style="display:inline-block;width:33%;text-align:center;">{update}</span><span style="display:inline-block;width:33%;text-align:center;">{delete}</span>',
                'buttons' => [
                    'view'=>function($url,$model,$key){
                        return Html::a('查看', $url, ['title'=>'查看','class'=>'label label-info']);
                    },
                    'update'=>function($url,$model,$key){
                        return Html::a('修改', $url, ['title'=>'修改','class'=>'label label-primary']);
                    },
                    'delete'=>function($url,$model,$key){
                        return Html::a('删除', $url, ['title'=>'删除','class'=>'label label-danger','data-confirm'=>'你确定要删除吗？','data-method'=>'post','data-pjax'=>'1']);
                    },
                ],
            ],
        ],
        //分页按钮
        'pager'=>[ 
            'firstPageLabel'=>'首页', 
            'prevPageLabel'=>'上一页', 
            'nextPageLabel'=>'下一页', 
            'lastPageLabel'=>'最后一页', 
        ]
    ]); ?>
    <p>
        <?= Html::a(Yii::t('app', '添加'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
