<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "ahadi".
 *
 * @property string $id
 * @property double $amount
 * @property double $amount_due
 * @property string $matoleo_date
 * @property string $muumini_id
 * @property string $ahadi_time_interval_id
 */
class Ahadi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ahadi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amount', 'amount_due'], 'number'],
            [['muumini_id', 'ahadi_time_interval_id'], 'required'],
            [['muumini_id', 'ahadi_time_interval_id'], 'integer'],
            [['matoleo_date'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amount' => 'Amount',
            'amount_due' => 'Amount Due',
            'matoleo_date' => 'Matoleo Date',
            'muumini_id' => 'Muumini ID',
            'ahadi_time_interval_id' => 'Ahadi Time Interval ID',
        ];
    }

    /**
     * @inheritdoc
     * @return AhadiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AhadiQuery(get_called_class());
    }
}
