<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop_shipping".
 *
 * @property integer $shipping_id
 * @property string $shipping_name
 * @property string $unique_code
 * @property string $version_lock
 * @property string $create_time
 * @property string $update_time
 * @property integer $logic_delete
 */
class ShopShipping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop_shipping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shipping_name'], 'required'],
            [['version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [['shipping_name'], 'string', 'max' => 16],
            [['unique_code'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shipping_id' => Yii::t('app', 'ID'),
            'shipping_name' => Yii::t('app', '配送方式'),
            'unique_code' => Yii::t('app', '唯一码'),
            'version_lock' => Yii::t('app', '版本锁'),
            'create_time' => Yii::t('app', '创建时间'),
            'update_time' => Yii::t('app', '修改时间'),
            'logic_delete' => Yii::t('app', '逻辑删除'),
        ];
    }

    /**
     * @inheritdoc
     * @return ShopShippingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShopShippingQuery(get_called_class());
    }
}
