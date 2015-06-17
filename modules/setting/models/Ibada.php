<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "ibada".
 *
 * @property integer $id
 * @property string $ibada_date
 * @property string $kumbukumbu
 * @property integer $ibada_type_id
 *
 * @property IbadaType $ibadaType
 * @property MatagazoMengineyo[] $matagazoMengineyos
 * @property NiaYaMisa[] $niaYaMisas
 * @property Sadaka[] $sadakas
 */
class Ibada extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ibada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ibada_date'], 'safe'],
            [['ibada_type_id'], 'required'],
            [['ibada_type_id'], 'integer'],
            [['kumbukumbu'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ibada_date' => 'Ibada Date',
            'kumbukumbu' => 'Kumbukumbu',
            'ibada_type_id' => 'Ibada Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIbadaType()
    {
        return $this->hasOne(IbadaType::className(), ['id' => 'ibada_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatagazoMengineyos()
    {
        return $this->hasMany(MatagazoMengineyo::className(), ['ibada_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNiaYaMisas()
    {
        return $this->hasMany(NiaYaMisa::className(), ['ibada_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSadakas()
    {
        return $this->hasMany(Sadaka::className(), ['ibada_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return IbadaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IbadaQuery(get_called_class());
    }
}
