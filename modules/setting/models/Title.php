<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "title".
 *
 * @property integer $id
 * @property string $title_name
 *
 * @property JumuiyaLeader[] $jumuiyaLeaders
 */
class Title extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'title';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_name' => 'Title Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJumuiyaLeaders()
    {
        return $this->hasMany(JumuiyaLeader::className(), ['title_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TitleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TitleQuery(get_called_class());
    }
}
