<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopPayment;

/**
 * ShopPaymentSearch represents the model behind the search form about `app\models\ShopPayment`.
 */
class ShopPaymentSearch extends ShopPayment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_id', 'version_lock', 'create_time', 'update_time', 'logic_delete'], 'integer'],
            [['payment_name', 'unique_code'], 'safe'],
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
        $query = ShopPayment::find();//默认按升序排列
        //$query = ShopPayment::find()->orderBy('id desc');//按降序，替换为本模型的id

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
            'payment_id' => $this->payment_id,
            'version_lock' => $this->version_lock,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'logic_delete' => $this->logic_delete,
        ]);

        $query->andFilterWhere(['like', 'payment_name', $this->payment_name])
            ->andFilterWhere(['like', 'unique_code', $this->unique_code]);

        return $dataProvider;
    }
}
