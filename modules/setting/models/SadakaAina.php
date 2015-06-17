<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "sadaka_aina".
 *
 * @property integer $id
 * @property string $sadaka_name
 * @property string $description
 *
 * @property Sadaka[] $sadakas
 */
class SadakaAina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sadaka_aina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sadaka_name', 'description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sadaka_name' => 'Sadaka Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSadakas()
    {
        return $this->hasMany(Sadaka::className(), ['sadaka_aina_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return SadakaAinaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SadakaAinaQuery(get_called_class());
    }
}
