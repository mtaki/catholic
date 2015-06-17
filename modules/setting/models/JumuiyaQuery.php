<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Jumuiya]].
 *
 * @see Jumuiya
 */
class JumuiyaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jumuiya[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jumuiya|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}