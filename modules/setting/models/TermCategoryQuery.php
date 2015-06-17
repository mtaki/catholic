<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[TermCategory]].
 *
 * @see TermCategory
 */
class TermCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TermCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TermCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}