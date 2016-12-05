<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopGoodsModel;

/**
 * ShopGoodsModelSearch represents the model behind the search form about `app\models\ShopGoodsModel`.
 */
class ShopGoodsModelSearch extends ShopGoodsModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_model_id', 'version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [['goods_model_name', 'unique_code'], 'safe'],
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
        $query = ShopGoodsModel::find();//默认按升序排列
        //$query = ShopGoodsModel::find()->orderBy('id desc');//按降序，替换为本模型的id

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
            'goods_model_id' => $this->goods_model_id,
            'version_lock' => $this->version_lock,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'logic_delete' => $this->logic_delete,
        ]);

        $query->andFilterWhere(['like', 'goods_model_name', $this->goods_model_name])
            ->andFilterWhere(['like', 'unique_code', $this->unique_code]);

        return $dataProvider;
    }
}
