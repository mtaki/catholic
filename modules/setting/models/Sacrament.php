<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "sacrament".
 *
 * @property string $id
 * @property string $description
 *
 * @property MuuminiSacrament[] $muuminiSacraments
 */
class Sacrament extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sacrament';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string', 'max' => 45]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuuminiSacraments()
    {
        return $this->hasMany(MuuminiSacrament::className(), ['sacrament_service_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return SacramentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SacramentQuery(get_called_class());
    }
}
