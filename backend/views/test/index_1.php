<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        //'filterModel' => $searchModel,
        'layout'=>'{items}<div style="width:50%;float:left;">{summary}</div><div style="width:50%;float:left;"><div style="float:right;">{pager}</div></div><div style="clear:both;"></div>',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'test_id',
            'test_name',
            'test_img',
            'test_desc:ntext',
            'test_is_recommend',
            // 'test_is_best',
            // 'test_type_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Create Test'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
