<?php

namespace app\modules\member\models;

use Yii;

/**
 * This is the model class for table "muumini_huduma".
 *
 * @property string $id
 * @property string $huduma_id
 * @property string $msharika_id
 * @property string $start_date
 *
 * @property Huduma $huduma
 * @property Muumini $msharika
 */
class MuuminiHuduma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'muumini_huduma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['huduma_id', 'msharika_id'], 'required'],
            [['huduma_id', 'msharika_id'], 'integer'],
            [['start_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'huduma_id' => 'Huduma ID',
            'msharika_id' => 'Msharika ID',
            'start_date' => 'Start Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHuduma()
    {
        return $this->hasOne(Huduma::className(), ['id' => 'huduma_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMsharika()
    {
        return $this->hasOne(Muumini::className(), ['id' => 'msharika_id']);
    }

    /**
     * @inheritdoc
     * @return MuuminiHudumaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MuuminiHudumaQuery(get_called_class());
    }
}
