<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%fbg_goods}}".
 *
 * @property string $unique_code
 * @property string $version_lock
 * @property string $create_time
 * @property string $update_time
 * @property integer $logic_delete
 * @property string $goods_id
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fbg_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unique_code'], 'required'],
            [['version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [ 'logic_delete', 'default','value'=>'1'],
            
            [['unique_code'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'unique_code' => Yii::t('app', '唯一码'),
            'version_lock' => Yii::t('app', '版本锁'),
            'create_time' => Yii::t('app', '创建时间'),
            'update_time' => Yii::t('app', '修改时间'),
            'logic_delete' => Yii::t('app', '逻辑删除'),
            'goods_id' => Yii::t('app', 'ID'),
        ];
    }
}
