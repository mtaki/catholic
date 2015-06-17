<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "term_category".
 *
 * @property integer $id
 * @property string $category_name
 * @property string $description
 *
 * @property Terms[] $terms
 */
class TermCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'term_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTerms()
    {
        return $this->hasMany(Terms::className(), ['term_category_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TermCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TermCategoryQuery(get_called_class());
    }
}
