<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "huduma".
 *
 * @property string $id
 * @property string $description
 * @property string $introduced_date
 *
 * @property MuuminiHuduma[] $muuminiHudumas
 */
class Huduma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'huduma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string', 'max' => 200],
            [['introduced_date'], 'string', 'max' => 45]
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
    public function getMuuminiHudumas()
    {
        return $this->hasMany(MuuminiHuduma::className(), ['huduma_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return HudumaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HudumaQuery(get_called_class());
    }
}
