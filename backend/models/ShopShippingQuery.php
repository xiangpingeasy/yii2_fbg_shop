<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ShopShipping]].
 *
 * @see ShopShipping
 */
class ShopShippingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ShopShipping[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ShopShipping|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
