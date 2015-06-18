<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "jumuiya".
 *
 * @property integer $id
 * @property string $jumuiya_name
 * @property string $start_date
 * @property string $end_date
 * @property string $comment
 *
 * @property JumuiyaLeader[] $jumuiyaLeaders
 * @property JumuiyaMatoleo[] $jumuiyaMatoleos
 * @property Muumini[] $muuminis
 */
class Jumuiya extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jumuiya';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'safe'],
            [['jumuiya_name','parokia_id'], 'string', 'max' => 100],
            [['comment'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jumuiya_name' => 'Jumuiya Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'comment' => 'Comment',
            'parokia_id' => 'Parokia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJumuiyaLeaders()
    {
        return $this->hasMany(JumuiyaLeader::className(), ['jumuiya_id' => 'id']);
		return $this->belongTO(Parokia::className(), ['id' => 'parokia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJumuiyaMatoleos()
    {
        return $this->hasMany(JumuiyaMatoleo::className(), ['jumuiya_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuuminis()
    {
        return $this->hasMany(Muumini::className(), ['jumuiya_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return JumuiyaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JumuiyaQuery(get_called_class());
    }
}
