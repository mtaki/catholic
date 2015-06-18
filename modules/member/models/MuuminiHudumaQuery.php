<?php

namespace app\modules\member\models;

/**
 * This is the ActiveQuery class for [[MuuminiHuduma]].
 *
 * @see MuuminiHuduma
 */
class MuuminiHudumaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MuuminiHuduma[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MuuminiHuduma|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}