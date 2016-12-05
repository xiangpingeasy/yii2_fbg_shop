<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop_goods_brand".
 *
 * @property string $goods_brand_id
 * @property string $goods_brand_name
 * @property integer $goods_cat_id
 * @property string $unique_code
 * @property string $version_lock
 * @property string $create_time
 * @property string $update_time
 * @property integer $logic_delete
 */
class ShopGoodsBrand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop_goods_brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_brand_name', 'goods_cat_id'], 'required'],
            [['goods_cat_id', 'version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [['goods_brand_name'], 'string', 'max' => 64],
            [['unique_code'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_brand_id' => Yii::t('app', 'ID'),
            'goods_brand_name' => Yii::t('app', '品牌名称'),
            'goods_cat_id' => Yii::t('app', '品牌分类'),
            'unique_code' => Yii::t('app', '唯一码'),
            'version_lock' => Yii::t('app', '版本锁'),
            'create_time' => Yii::t('app', '创建时间'),
            'update_time' => Yii::t('app', '修改时间'),
            'logic_delete' => Yii::t('app', '逻辑删除'),
        ];
    }

    /**
     * @inheritdoc
     * @return ShopGoodsBrandQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShopGoodsBrandQuery(get_called_class());
    }
}
