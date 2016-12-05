<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopGoodsCategory;

/**
 * ShopGoodsCategorySearch represents the model behind the search form about `app\models\ShopGoodsCategory`.
 */
class ShopGoodsCategorySearch extends ShopGoodsCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_cat_id', 'goods_cat_pid', 'goods_cat_level', 'goods_cat_sort', 'version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [['goods_cat_name', 'goods_cat_img', 'unique_code'], 'safe'],
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
        $query = ShopGoodsCategory::find();//默认按升序排列
        //$query = ShopGoodsCategory::find()->orderBy('id desc');//按降序，替换为本模型的id

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
            'goods_cat_id' => $this->goods_cat_id,
            'goods_cat_pid' => $this->goods_cat_pid,
            'goods_cat_level' => $this->goods_cat_level,
            'goods_cat_sort' => $this->goods_cat_sort,
            'version_lock' => $this->version_lock,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'logic_delete' => $this->logic_delete,
        ]);

        $query->andFilterWhere(['like', 'goods_cat_name', $this->goods_cat_name])
            ->andFilterWhere(['like', 'goods_cat_img', $this->goods_cat_img])
            ->andFilterWhere(['like', 'unique_code', $this->unique_code]);

        return $dataProvider;
    }
}
