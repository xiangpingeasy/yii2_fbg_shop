<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopGoodsSerial;

/**
 * ShopGoodsSerialSearch represents the model behind the search form about `app\models\ShopGoodsSerial`.
 */
class ShopGoodsSerialSearch extends ShopGoodsSerial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_serial_id', 'goods_category_id', 'goods_model_id', 'goods_type_id', 'goods_brand_id', 'payment_id', 'shipping_id', 'goods_serial_is_sale', 'goods_serial_show_index', 'goods_serial_comment_count', 'goods_serial_sale_count', 'goods_serial_best_comment_count', 'goods_serial_well_comment_count', 'goods_serial_bad_comment_count', 'goods_serial_visit_count', 'goods_serial_share_count', 'goods_serial_collect_count', 'version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [['goods_serial_name_pc', 'goods_serial_name_mobile', 'goods_serial_sub_name_pc', 'goods_serial_sub_name_mobile', 'goods_serial_list_img_pc', 'goods_serial_list_img_mobile', 'goods_serial_desc_pc', 'goods_serial_desc_mobile', 'seo_title', 'seo_keyword', 'seo_desc', 'seo_img_alt', 'unique_code'], 'safe'],
            [['goods_serial_now_price', 'goods_serial_before_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ShopGoodsSerial::find();//默认按升序排列
        //$query = ShopGoodsSerial::find()->orderBy('id desc');//按降序，替换为本模型的id

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>['pagesize'=>10]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'goods_serial_id' => $this->goods_serial_id,
            'goods_serial_now_price' => $this->goods_serial_now_price,
            'goods_serial_before_price' => $this->goods_serial_before_price,
            'goods_category_id' => $this->goods_category_id,
            'goods_model_id' => $this->goods_model_id,
            'goods_type_id' => $this->goods_type_id,
            'goods_brand_id' => $this->goods_brand_id,
            'payment_id' => $this->payment_id,
            'shipping_id' => $this->shipping_id,
            'goods_serial_is_sale' => $this->goods_serial_is_sale,
            'goods_serial_show_index' => $this->goods_serial_show_index,
            'goods_serial_comment_count' => $this->goods_serial_comment_count,
            'goods_serial_sale_count' => $this->goods_serial_sale_count,
            'goods_serial_best_comment_count' => $this->goods_serial_best_comment_count,
            'goods_serial_well_comment_count' => $this->goods_serial_well_comment_count,
            'goods_serial_bad_comment_count' => $this->goods_serial_bad_comment_count,
            'goods_serial_visit_count' => $this->goods_serial_visit_count,
            'goods_serial_share_count' => $this->goods_serial_share_count,
            'goods_serial_collect_count' => $this->goods_serial_collect_count,
            'version_lock' => $this->version_lock,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'logic_delete' => $this->logic_delete,
        ]);

        $query->andFilterWhere(['like', 'goods_serial_name_pc', $this->goods_serial_name_pc])
            ->andFilterWhere(['like', 'goods_serial_name_mobile', $this->goods_serial_name_mobile])
            ->andFilterWhere(['like', 'goods_serial_sub_name_pc', $this->goods_serial_sub_name_pc])
            ->andFilterWhere(['like', 'goods_serial_sub_name_mobile', $this->goods_serial_sub_name_mobile])
            ->andFilterWhere(['like', 'goods_serial_list_img_pc', $this->goods_serial_list_img_pc])
            ->andFilterWhere(['like', 'goods_serial_list_img_mobile', $this->goods_serial_list_img_mobile])
            ->andFilterWhere(['like', 'goods_serial_desc_pc', $this->goods_serial_desc_pc])
            ->andFilterWhere(['like', 'goods_serial_desc_mobile', $this->goods_serial_desc_mobile])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_keyword', $this->seo_keyword])
            ->andFilterWhere(['like', 'seo_desc', $this->seo_desc])
            ->andFilterWhere(['like', 'seo_img_alt', $this->seo_img_alt])
            ->andFilterWhere(['like', 'unique_code', $this->unique_code]);

        return $dataProvider;
    }
}
