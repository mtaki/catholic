<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "parokia".
 *
 * @property integer $id
 * @property string $parokia
 * @property string $catholic_name
 * @property string $start_date
 * @property integer $jimbo_id
 *
 * @property Jimbo $jimbo
 */
class Parokia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parokia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parokia', 'catholic_name', 'jimbo_id'], 'required'],
            [['start_date'], 'safe'],
            [['jimbo_id'], 'integer'],
            [['parokia'], 'string', 'max' => 60],
            [['catholic_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parokia' => 'Parokia',
            'catholic_name' => 'Catholic Name',
            'start_date' => 'Start Date',
            'jimbo_id' => 'Jimbo ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJimbo()
    {
        return $this->hasOne(Jimbo::className(), ['id' => 'jimbo_id']);
        return $this->hasMany(Jumuiya::className(), ['id' => 'parokia_id']);
    }

    /**
     * @inheritdoc
     * @return ParokiaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ParokiaQuery(get_called_class());
    }
}
