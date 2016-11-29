<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Test */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'test_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'test_is_recommend')->textInput() ?>

    <?= $form->field($model, 'test_is_best')->radioList(['0'=>'否','1'=>'是'], ['unselect'=>1,'tag'=>'span']) ?>

    <?= $form->field($model, 'test_type_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
