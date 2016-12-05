<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property string $test_id
 * @property string $test_name
 * @property string $test_img
 * @property string $test_desc
 * @property integer $test_is_recommend
 * @property integer $test_is_best
 * @property integer $test_type_id
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test_name'], 'required','message'=>'用户名不能为空'],
            [['test_img', 'test_type_id'], 'required'],
            [['test_desc'], 'string'],
            [['test_is_recommend', 'test_is_best', 'test_type_id'], 'integer'],
            [['test_name'], 'string', 'max' => 16],
            [['test_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'test_id' => Yii::t('app', 'ID'),
            'test_name' => Yii::t('app', '名称'),
            'test_img' => Yii::t('app', '图片'),
            'test_desc' => Yii::t('app', '描述'),
            'test_is_recommend' => Yii::t('app', '是否推荐'),
            'test_is_best' => Yii::t('app', '是否精品'),
            'test_type_id' => Yii::t('app', '分类'),
        ];
    }

    /**
     * @inheritdoc
     * @return TQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TQuery(get_called_class());
    }
}
