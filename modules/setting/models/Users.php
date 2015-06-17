<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $password
 * @property string $id
 * @property string $username
 * @property string $name
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password', 'username', 'name'], 'required'],
            [['password', 'username', 'name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'password' => 'Password',
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
        ];
    }

    /**
     * @inheritdoc
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
