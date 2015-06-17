<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Title]].
 *
 * @see Title
 */
class TitleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Title[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Title|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}