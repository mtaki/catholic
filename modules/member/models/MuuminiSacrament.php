<?php

namespace app\modules\member\models;

use Yii;

/**
 * This is the model class for table "muumini_sacrament".
 *
 * @property string $id
 * @property string $msharika_id
 * @property string $sacrament_service_id
 * @property string $place
 * @property string $year_issued
 * @property string $description
 *
 * @property Muumini $msharika
 * @property Sacrament $sacramentService
 */
class MuuminiSacrament extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'muumini_sacrament';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['msharika_id', 'sacrament_service_id'], 'integer'],
            [['place'], 'string', 'max' => 100],
            [['year_issued'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'msharika_id' => 'Msharika ID',
            'sacrament_service_id' => 'Sacrament Service ID',
            'place' => 'Place',
            'year_issued' => 'Year Issued',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMsharika()
    {
        return $this->hasOne(Muumini::className(), ['id' => 'msharika_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSacramentService()
    {
        return $this->hasOne(Sacrament::className(), ['id' => 'sacrament_service_id']);
    }

    /**
     * @inheritdoc
     * @return MuuminiSacramentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MuuminiSacramentQuery(get_called_class());
    }
}
