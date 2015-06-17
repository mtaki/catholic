<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[SadakaAina]].
 *
 * @see SadakaAina
 */
class SadakaAinaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SadakaAina[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SadakaAina|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}