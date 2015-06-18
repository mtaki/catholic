<?php

namespace app\modules\member\models;

use Yii;

/**
 * This is the model class for table "muumini".
 *
 * @property string $id
 * @property string $fullname
 * @property string $dob
 * @property string $pob
 * @property string $marital_status
 * @property string $area
 * @property string $mtaa
 * @property string $block
 * @property string $house_no
 * @property string $box
 * @property string $phone_no
 * @property string $neighbour_fullname
 * @property string $neighbour_phone_no
 * @property string $mzee_kanisa_fullname
 * @property string $mzee_kanisa_phone_no
 * @property string $work
 * @property string $education
 * @property string $work_place
 * @property string $spouse_name
 * @property string $spouse_phone_no
 * @property string $marriage_type
 * @property string $no
 * @property string $life_status
 * @property integer $parent_id
 * @property integer $relationship_id
 * @property integer $jumuiya_id
 *
 * @property Family[] $families
 * @property JumuiyaLeader[] $jumuiyaLeaders
 * @property Jumuiya $jumuiya
 * @property MuuminiHuduma[] $muuminiHudumas
 * @property MuuminiSacrament[] $muuminiSacraments
 */
class Muumini extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'muumini';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dob'], 'safe'],
            [['life_status', 'relationship_id'], 'required'],
            [['parent_id', 'relationship_id', 'jumuiya_id'], 'integer'],
            [['fullname', 'pob', 'marital_status', 'area', 'mtaa', 'block', 'neighbour_fullname', 'mzee_kanisa_fullname', 'education', 'work_place', 'spouse_name', 'life_status'], 'string', 'max' => 100],
            [['house_no', 'phone_no', 'neighbour_phone_no', 'mzee_kanisa_phone_no', 'work', 'spouse_phone_no', 'marriage_type', 'no'], 'string', 'max' => 45],
            [['box'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'dob' => 'Dob',
            'pob' => 'Pob',
            'marital_status' => 'Marital Status',
            'area' => 'Area',
            'mtaa' => 'Mtaa',
            'block' => 'Block',
            'house_no' => 'House No',
            'box' => 'Box',
            'phone_no' => 'Phone No',
            'neighbour_fullname' => 'Neighbour Fullname',
            'neighbour_phone_no' => 'Neighbour Phone No',
            'mzee_kanisa_fullname' => 'Mzee Kanisa Fullname',
            'mzee_kanisa_phone_no' => 'Mzee Kanisa Phone No',
            'work' => 'Work',
            'education' => 'Education',
            'work_place' => 'Work Place',
            'spouse_name' => 'Spouse Name',
            'spouse_phone_no' => 'Spouse Phone No',
            'marriage_type' => 'Marriage Type',
            'no' => 'No',
            'life_status' => 'Life Status',
            'parent_id' => 'Parent ID',
            'relationship_id' => 'Relationship ID',
            'jumuiya_id' => 'Jumuiya ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamilies()
    {
        return $this->hasMany(Family::className(), ['msharika_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJumuiyaLeaders()
    {
        return $this->hasMany(JumuiyaLeader::className(), ['muumini_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJumuiya()
    {
        return $this->hasOne(Jumuiya::className(), ['id' => 'jumuiya_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuuminiHudumas()
    {
        return $this->hasMany(MuuminiHuduma::className(), ['msharika_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuuminiSacraments()
    {
        return $this->hasMany(MuuminiSacrament::className(), ['msharika_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return MuuminiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MuuminiQuery(get_called_class());
    }
}
