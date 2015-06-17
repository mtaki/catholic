<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Sacrament]].
 *
 * @see Sacrament
 */
class SacramentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Sacrament[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Sacrament|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}