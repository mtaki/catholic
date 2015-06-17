<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "ibada_type".
 *
 * @property integer $id
 * @property string $ibada_type
 *
 * @property Ibada[] $ibadas
 */
class IbadaType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ibada_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ibada_type'], 'required'],
            [['ibada_type'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ibada_type' => 'Ibada Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIbadas()
    {
        return $this->hasMany(Ibada::className(), ['ibada_type_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return IbadaTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IbadaTypeQuery(get_called_class());
    }
}
