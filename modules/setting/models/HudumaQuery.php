<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Huduma]].
 *
 * @see Huduma
 */
class HudumaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Huduma[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Huduma|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}