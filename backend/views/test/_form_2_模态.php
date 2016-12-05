<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Test */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-form">

    <?php $form = ActiveForm::begin([
        'id'=>'test-id',
        'enableAjaxValidation'=>TRUE,
        'validationUrl'=> Url::toRoute(['validate-form']),
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' =>[  
            'template' => "{label}\n<div class=\"col-lg-7\">{input}</div>\n<div class=\"col-lg-3\">{error}</div>",  
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
            'inputOptions' => ['class' => 'form-control','style'=>'border-radius:3px;'],
            ],
        ]); ?>

    <?= $form->field($model, 'test_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'test_is_recommend')->textInput() ?>

    <?= $form->field($model, 'test_is_best')->textInput() ?>

    <?= $form->field($model, 'test_type_id')->textInput() ?>

    <div class="form-group">
        
    </div>
    <div class="form-group">
        <label class="col-lg-1"></label>
        <div class="col-lg-11">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '添加') : Yii::t('app', '修改'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
