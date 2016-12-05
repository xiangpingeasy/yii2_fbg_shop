<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline'],
        'fieldConfig'=>['template'=>'{label}{input}']
        
    ]); ?>

    <?= $form->field($model, 'test_id') ?>

    <?= $form->field($model, 'test_name') ?>

    <?= $form->field($model, 'test_img') ?>

    <?= $form->field($model, 'test_desc') ?>

    <?= $form->field($model, 'test_is_recommend') ?>

    <?php // echo $form->field($model, 'test_is_best') ?>

    <?php // echo $form->field($model, 'test_type_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '搜索'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', '重置'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
