<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "matoleo_aina".
 *
 * @property string $id
 * @property string $description
 * @property string $introduced_date
 *
 * @property JumuiyaMatoleo[] $jumuiyaMatoleos
 * @property Matoleo[] $matoleos
 */
class MatoleoAina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matoleo_aina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'introduced_date'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'introduced_date' => 'Introduced Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJumuiyaMatoleos()
    {
        return $this->hasMany(JumuiyaMatoleo::className(), ['matoleo_aina_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatoleos()
    {
        return $this->hasMany(Matoleo::className(), ['matoleo_aina_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return MatoleoAinaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MatoleoAinaQuery(get_called_class());
    }
}
