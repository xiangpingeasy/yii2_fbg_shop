<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ShopGoodsType]].
 *
 * @see ShopGoodsType
 */
class ShopGoodsTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ShopGoodsType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ShopGoodsType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
