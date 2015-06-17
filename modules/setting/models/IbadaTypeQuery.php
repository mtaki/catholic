<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[IbadaType]].
 *
 * @see IbadaType
 */
class IbadaTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return IbadaType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return IbadaType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}