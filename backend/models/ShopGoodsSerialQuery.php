<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ShopGoodsSerial]].
 *
 * @see ShopGoodsSerial
 */
class ShopGoodsSerialQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ShopGoodsSerial[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ShopGoodsSerial|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
