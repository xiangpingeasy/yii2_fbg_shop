<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">

<?php if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? " " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>

    
<?= $generator->enablePjax ? '<?php Pjax::begin(); ?>' : '' ?>
<?php if ($generator->indexWidgetType === 'grid'): ?>
    <?= "<?= " ?>GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>'{items}<div style="width:50%;float:left;">{summary}</div><div style="width:50%;float:left;"><div style="float:right;">{pager}</div></div><div style="clear:both;"></div>',
        'summary'=>'当前第{page}/{pageCount}页 共{totalCount}条记录',
        <?= !empty($generator->searchModelClass) ? "//'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
            //['class' => 'yii\grid\SerialColumn'],
            //表字段
<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if (++$count < 6) {
            echo "            '" . $name . "',\n";
        } else {
            echo "            // '" . $name . "',\n";
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if (++$count < 6) {
            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        } else {
            echo "            // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>
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
<?php else: ?>
    <?= "<?= " ?>ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
        },
    ]) ?>
<?php endif; ?>
<?= $generator->enablePjax ? '<?php Pjax::end(); ?>' : '' ?>
    <p>
        <?= "<?= " ?>Html::a(<?= $generator->generateString('添加') ?>, ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
