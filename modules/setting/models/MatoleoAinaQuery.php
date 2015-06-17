<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[MatoleoAina]].
 *
 * @see MatoleoAina
 */
class MatoleoAinaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MatoleoAina[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MatoleoAina|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}