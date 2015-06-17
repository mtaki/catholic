<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "company_setup".
 *
 * @property integer $id
 * @property string $name
 * @property string $physical_address
 * @property string $postal_address
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $website
 * @property string $logo
 */
class CompanySetup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_setup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'physical_address', 'postal_address', 'phone', 'fax', 'email', 'website'], 'required'],
            [['physical_address'], 'string'],
            [['name', 'postal_address'], 'string', 'max' => 200],
            [['phone', 'fax', 'email', 'website', 'logo'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'physical_address' => 'Physical Address',
            'postal_address' => 'Postal Address',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'Email',
            'website' => 'Website',
            'logo' => 'Logo',
        ];
    }

    /**
     * @inheritdoc
     * @return CompanySetupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanySetupQuery(get_called_class());
    }
}
