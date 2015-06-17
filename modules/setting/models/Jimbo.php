<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "jimbo".
 *
 * @property integer $id
 * @property string $jimbo_name
 * @property string $start_date
 * @property string $description
 *
 * @property Parokia[] $parokias
 */
class Jimbo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jimbo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jimbo_name'], 'required'],
            [['start_date'], 'safe'],
            [['jimbo_name'], 'string', 'max' => 60],
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
            'jimbo_name' => 'Jimbo Name',
            'start_date' => 'Start Date',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParokias()
    {
        return $this->hasMany(Parokia::className(), ['jimbo_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return JimboQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JimboQuery(get_called_class());
    }
}
