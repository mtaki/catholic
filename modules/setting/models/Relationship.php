<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "relationship".
 *
 * @property string $id
 * @property string $description
 *
 * @property Family[] $families
 */
class Relationship extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relationship';
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
    public function getFamilies()
    {
        return $this->hasMany(Family::className(), ['relationship_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return RelationshipQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RelationshipQuery(get_called_class());
    }
}
