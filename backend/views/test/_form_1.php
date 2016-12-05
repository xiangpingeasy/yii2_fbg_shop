<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Test */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-form">

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' =>[  
            'template' => "{label}\n<div class=\"col-lg-7\">{input}</div>\n<div class=\"col-lg-4\">{error}</div>",  
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

    <?= $form->field($model, 'test_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_img')->widget('pjkui\kindeditor\Kindeditor',['clientOptions'=>['allowFileManager'=>'true','allowUpload'=>'true'],'editorType'=>'image-dialog']) ?>
    
    <?= $form->field($model, 'test_desc')->widget('pjkui\kindeditor\KindEditor',
    ['clientOptions'=>['allowFileManager'=>'true',
    'allowUpload'=>'true']]) 
    ?>

    <?= $form->field($model, 'test_is_recommend')->textInput() ?>

    <?= $form->field($model, 'test_is_best')->radioList(['0'=>'否','1'=>'是'], ['unselect'=>1,'tag'=>'div','style'=>'margin-top:5px;']) ?>

    <?= $form->field($model, 'test_type_id')->textInput() ?>

    <div class="form-group">
        <label class="col-lg-1"></label>
        <div class="col-lg-11">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
