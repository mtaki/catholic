<?php

namespace app\modules\member\models;

/**
 * This is the ActiveQuery class for [[Muumini]].
 *
 * @see Muumini
 */
class MuuminiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Muumini[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Muumini|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}