<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Test */

$this->title = $model->test_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-view">

    <h2>操作成功！</h2>

    <p>
        <?= Html::a(Yii::t('app', '返回列表页'), ['index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', '点击修改'), ['update', 'id' => $model->test_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '继续添加'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


</div>
