<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ShopGoodsCategory]].
 *
 * @see ShopGoodsCategory
 */
class ShopGoodsCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ShopGoodsCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ShopGoodsCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
