<?php

namespace app\modules\member\models;

/**
 * This is the ActiveQuery class for [[MuuminiSacrament]].
 *
 * @see MuuminiSacrament
 */
class MuuminiSacramentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MuuminiSacrament[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MuuminiSacrament|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}