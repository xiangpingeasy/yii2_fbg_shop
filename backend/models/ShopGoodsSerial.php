<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop_goods_serial".
 *
 * @property string $goods_serial_id
 * @property string $goods_serial_name_pc
 * @property string $goods_serial_name_mobile
 * @property string $goods_serial_sub_name_pc
 * @property string $goods_serial_sub_name_mobile
 * @property string $goods_serial_now_price
 * @property string $goods_serial_before_price
 * @property string $goods_serial_list_img_pc
 * @property string $goods_serial_list_img_mobile
 * @property string $goods_serial_desc_pc
 * @property string $goods_serial_desc_mobile
 * @property string $goods_category_id
 * @property string $goods_model_id
 * @property integer $goods_type_id
 * @property integer $goods_brand_id
 * @property integer $payment_id
 * @property integer $shipping_id
 * @property integer $goods_serial_is_sale
 * @property integer $goods_serial_show_index
 * @property string $goods_serial_comment_count
 * @property string $goods_serial_sale_count
 * @property string $goods_serial_best_comment_count
 * @property string $goods_serial_well_comment_count
 * @property string $goods_serial_bad_comment_count
 * @property string $goods_serial_visit_count
 * @property string $goods_serial_share_count
 * @property string $goods_serial_collect_count
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_desc
 * @property string $seo_img_alt
 * @property string $unique_code
 * @property string $version_lock
 * @property string $create_time
 * @property string $update_time
 * @property integer $logic_delete
 */
class ShopGoodsSerial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop_goods_serial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_serial_name_pc', 'goods_serial_name_mobile', 'goods_serial_sub_name_pc', 'goods_serial_sub_name_mobile', 'goods_serial_now_price', 'goods_serial_before_price', 'goods_serial_list_img_pc', 'goods_serial_list_img_mobile', 'goods_category_id', 'goods_model_id', 'goods_type_id', 'goods_brand_id', 'payment_id', 'shipping_id'], 'required'],
            [['goods_serial_now_price', 'goods_serial_before_price'], 'number'],
            [['goods_serial_desc_pc', 'goods_serial_desc_mobile'], 'string'],
            [['goods_category_id', 'goods_model_id', 'goods_type_id', 'goods_brand_id', 'payment_id', 'shipping_id', 'goods_serial_is_sale', 'goods_serial_show_index', 'goods_serial_comment_count', 'goods_serial_sale_count', 'goods_serial_best_comment_count', 'goods_serial_well_comment_count', 'goods_serial_bad_comment_count', 'goods_serial_visit_count', 'goods_serial_share_count', 'goods_serial_collect_count', 'version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [['goods_serial_name_pc', 'goods_serial_sub_name_pc', 'seo_title', 'seo_keyword'], 'string', 'max' => 64],
            [['goods_serial_name_mobile', 'goods_serial_sub_name_mobile', 'seo_img_alt', 'unique_code'], 'string', 'max' => 32],
            [['goods_serial_list_img_pc', 'goods_serial_list_img_mobile', 'seo_desc'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_serial_id' => Yii::t('app', 'ID'),
            'goods_serial_name_pc' => Yii::t('app', '商品标题PC端'),
            'goods_serial_name_mobile' => Yii::t('app', '商品标题手机端'),
            'goods_serial_sub_name_pc' => Yii::t('app', '子标题PC端'),
            'goods_serial_sub_name_mobile' => Yii::t('app', '子标题手机端'),
            'goods_serial_now_price' => Yii::t('app', '现价'),
            'goods_serial_before_price' => Yii::t('app', '原价'),
            'goods_serial_list_img_pc' => Yii::t('app', 'PC端列表小图'),
            'goods_serial_list_img_mobile' => Yii::t('app', '手机端列表小图'),
            'goods_serial_desc_pc' => Yii::t('app', '商品详情PC端'),
            'goods_serial_desc_mobile' => Yii::t('app', '商品详情手机端'),
            'goods_category_id' => Yii::t('app', '商品分类'),
            'goods_model_id' => Yii::t('app', '商品模型'),
            'goods_type_id' => Yii::t('app', '商品类型'),
            'goods_brand_id' => Yii::t('app', '品牌'),
            'payment_id' => Yii::t('app', '支付方式'),
            'shipping_id' => Yii::t('app', '配送方式'),
            'goods_serial_is_sale' => Yii::t('app', '是否上架'),
            'goods_serial_show_index' => Yii::t('app', '显示到首页推荐'),
            'goods_serial_comment_count' => Yii::t('app', '评论数'),
            'goods_serial_sale_count' => Yii::t('app', '销量'),
            'goods_serial_best_comment_count' => Yii::t('app', '好评数'),
            'goods_serial_well_comment_count' => Yii::t('app', '中评数'),
            'goods_serial_bad_comment_count' => Yii::t('app', '差评数'),
            'goods_serial_visit_count' => Yii::t('app', '浏览数'),
            'goods_serial_share_count' => Yii::t('app', '分享次数'),
            'goods_serial_collect_count' => Yii::t('app', '收藏次数'),
            'seo_title' => Yii::t('app', 'SEO标题'),
            'seo_keyword' => Yii::t('app', 'SEO关键词'),
            'seo_desc' => Yii::t('app', 'SEO描述'),
            'seo_img_alt' => Yii::t('app', 'SEO图片alt标签'),
            'unique_code' => Yii::t('app', '唯一码'),
            'version_lock' => Yii::t('app', '版本锁'),
            'create_time' => Yii::t('app', '创建时间'),
            'update_time' => Yii::t('app', '修改时间'),
            'logic_delete' => Yii::t('app', '逻辑删除'),
        ];
    }

    /**
     * @inheritdoc
     * @return ShopGoodsSerialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShopGoodsSerialQuery(get_called_class());
    }
}
