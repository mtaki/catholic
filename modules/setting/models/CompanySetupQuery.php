<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[CompanySetup]].
 *
 * @see CompanySetup
 */
class CompanySetupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CompanySetup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CompanySetup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}