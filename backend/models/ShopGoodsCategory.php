<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop_goods_category".
 *
 * @property string $goods_cat_id
 * @property string $goods_cat_name
 * @property string $goods_cat_pid
 * @property string $goods_cat_img
 * @property integer $goods_cat_level
 * @property integer $goods_cat_sort
 * @property string $unique_code
 * @property string $version_lock
 * @property string $create_time
 * @property string $update_time
 * @property integer $logic_delete
 */
class ShopGoodsCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop_goods_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_cat_name', 'goods_cat_pid', 'goods_cat_level'], 'required'],
            [['goods_cat_pid', 'goods_cat_level', 'goods_cat_sort', 'version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            ['goods_cat_sort','default','value'=>0],//当表单没有值传递时，设置默认值
            [['goods_cat_name', 'unique_code'], 'string', 'max' => 32],
            [['goods_cat_img'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_cat_id' => Yii::t('app', 'ID'),
            'goods_cat_name' => Yii::t('app', '分类名称'),
            'goods_cat_pid' => Yii::t('app', '上级分类'),
            'goods_cat_img' => Yii::t('app', '分类图片'),
            'goods_cat_level' => Yii::t('app', '层级'),
            'goods_cat_sort' => Yii::t('app', '排序'),
            'unique_code' => Yii::t('app', '唯一码'),
            'version_lock' => Yii::t('app', '版本锁'),
            'create_time' => Yii::t('app', '创建时间'),
            'update_time' => Yii::t('app', '修改时间'),
            'logic_delete' => Yii::t('app', '逻辑删除'),
        ];
    }

    /**
     * @inheritdoc
     * @return ShopGoodsCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShopGoodsCategoryQuery(get_called_class());
    }
}
