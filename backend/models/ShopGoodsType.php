<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop_goods_type".
 *
 * @property string $goods_type_id
 * @property string $goods_type_name
 * @property string $unique_code
 * @property string $version_lock
 * @property string $create_time
 * @property string $update_time
 * @property integer $logic_delete
 */
class ShopGoodsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop_goods_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_type_name'], 'required'],
            [['version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [['goods_type_name'], 'string', 'max' => 16],
            [['unique_code'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_type_id' => Yii::t('app', 'ID'),
            'goods_type_name' => Yii::t('app', '类型名称'),
            'unique_code' => Yii::t('app', '唯一码'),
            'version_lock' => Yii::t('app', '版本锁'),
            'create_time' => Yii::t('app', '创建时间'),
            'update_time' => Yii::t('app', '修改时间'),
            'logic_delete' => Yii::t('app', '逻辑删除'),
        ];
    }

    /**
     * @inheritdoc
     * @return ShopGoodsTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShopGoodsTypeQuery(get_called_class());
    }
}
