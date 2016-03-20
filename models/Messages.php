<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

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
            [['email'], 'email'],
            [['homepage'], 'url'],
            [['text'], 'string'],
            [['user_name', 'email', 'homepage', 'browser'], 'string', 'max' => 256],
            ['IP', 'ip'],
            [['user_name', 'text'], 'trim']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'Имя пользователя',
            'email' => 'E-mail',
            'homepage' => 'Сайт пользователя',
            'text' => 'Текст сообщения',
            'IP' => 'IP',
            'browser' => 'Browser',
        ];
    }
    
    /*
     * Метод, который вызывается пред валидацией модели.
     */
    public function beforeValidate() {
        $this->IP = "192.168.1.1";
        $this->browser = "Firefox";
        return parent::beforeValidate();
    }
    
    /*
     * Метод, который вызывается перед сохранением модели
     */
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            $this->user_name = Html::encode($this->user_name);
            $this->text = Html::encode($this->text);
            return true;
        } else {
            return false;
        }
    }

}