<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_messages".
 *
 * @property integer $id
 * @property string $user_name
 * @property string $email
 * @property string $homepage
 * @property string $text
 * @property string $IP
 * @property string $browser
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'email', 'text', 'IP', 'browser'], 'required'],
            [['text'], 'string'],
            [['user_name', 'email', 'homepage', 'browser'], 'string', 'max' => 256],
            [['IP'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'User Name',
            'email' => 'Email',
            'homepage' => 'Homepage',
            'text' => 'Text',
            'IP' => 'Ip',
            'browser' => 'Browser',
        ];
    }
}
