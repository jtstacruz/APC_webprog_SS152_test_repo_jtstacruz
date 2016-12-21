<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $name
 * @property string $email
 * @property string $website
 * @property string $comment
 * @property string $gender
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
            [['name', 'email', 'website', 'comment', 'gender'], 'required'],
            [['name', 'email', 'gender'], 'string', 'max' => 25],
            [['website'], 'string', 'max' => 45],
            [['comment'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'name' => 'Name',
            'email' => 'Email',
            'website' => 'Website',
            'comment' => 'Comment',
            'gender' => 'Gender',
        ];
    }
}
