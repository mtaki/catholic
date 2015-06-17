<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Ahadi]].
 *
 * @see Ahadi
 */
class AhadiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Ahadi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Ahadi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}