<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Parokia]].
 *
 * @see Parokia
 */
class ParokiaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Parokia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Parokia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}