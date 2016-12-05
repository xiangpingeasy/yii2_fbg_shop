<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tests');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-index">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>'{items}<div style="width:50%;float:left;">{summary}</div><div style="width:50%;float:left;"><div style="float:right;">{pager}</div></div><div style="clear:both;"></div>',
        'summary'=>'当前第{page}/{pageCount}页 共{totalCount}条记录',
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //表字段
            'test_id',
            'test_name',
            'test_img',
            //'test_desc:ntext',
            'test_is_recommend',
            // 'test_is_best',
            // 'test_type_id',
            //操作按钮
            [ 
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'headerOptions' => ['width' => '120','style'=>'text-align:center;'],
                'template' => '<span style="display:inline-block;width:33%;text-align:center;">{view}</span><span style="display:inline-block;width:33%;text-align:center;">{update}</span><span style="display:inline-block;width:33%;text-align:center;">{delete}</span>',
                'buttons' => [
                    'view'=>function($url,$model,$key){
                        return Html::a('查看', $url, ['title'=>'查看']);
                    },
                    'update'=>function($url,$model,$key){
                        return Html::a('修改', $url, ['title'=>'修改']);
                    },
                    'delete'=>function($url,$model,$key){
                        return Html::a('删除', $url, ['title'=>'删除','data-confirm'=>'你确定要删除吗？','data-method'=>'post','data-pjax'=>'1']);
                    },
                ],
            ],
        ],
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
    <p>
        <?php  
     Modal::begin([
         'id'=>'operate-modal',
         'header'=>'<h4 class="modal-title"></h4>',
         'size'=>'modal-lg',
     ]);
     Modal::end();
        ?>
        <?php 
        echo Html::a('创建栏目',['create'],[
            'class'=>'btn btn-success',
            'id'=>'create',
            'data-toggle'=>'modal',
            'data-target'=>'#operate-modal'
        ]);
        ?>
        <?php
           $requestCreateUrl= Url::toRoute('create');
$js=<<<JS
$('#create').on('click',function(){
    $('.modal-title').html('创建栏目2');
        $.get('{$requestCreateUrl}',function(data){
        $('.modal-body').html(data);
   });
   });
JS;
        $this->registerJs($js);
        ?>
    </p>
</div>
