<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ShopGoodsBrand]].
 *
 * @see ShopGoodsBrand
 */
class ShopGoodsBrandQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ShopGoodsBrand[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ShopGoodsBrand|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
