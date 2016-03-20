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
 * @property string $public_date
 * @property string $IP
 * @property string $browser
 */
class Messages extends \yii\db\ActiveRecord
{
    /*
     * атрибут для CAPTCHA
     */
    public $captcha;
    
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
            [['user_name', 'email', 'text', 'captcha', 'IP', 'browser'], 'required'],
            ['user_name', 'match', 'pattern' => '/^[a-z0-9]{3,16}$/i',
                'message' => 'Имя пользователя должно содержать только цифры и буквы латинского алфавита.' .
                ' Его длина должна составлять 3 - 16 символов.'],
            [['email'], 'email'],
            [['homepage'], 'url'],
            [['text'], 'string'],
            [['captcha'], 'captcha'],
            [['homepage', 'browser', 'IP'], 'string', 'max' => 256],
            //['IP', 'ip'],
            [['text'], 'trim']
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
            'public_date' => 'Дата добавления',
            'captcha' => 'Введите символы',
            'IP' => 'IP',
            'browser' => 'Браузер',
        ];
    }
    
    /*
     * Метод, который вызывается пред валидацией модели.
     */
    public function beforeValidate() {
        // определяем дату создания записи
        $dt = new \DateTime();
        $this->public_date = $dt->format('Y-m-d H:i:s');
        // определяем IP
        $this->IP = Yii::$app->request->userIP;
        if(!isset($this->IP))
        {
            $this->IP = "не определено";
        }
        // определяем браузер
        $this->browser = Yii::$app->request->userAgent;
        if(!isset($this->browser))
        {
            $this->browser = "не определено";
        }
        return parent::beforeValidate();
    }
    
    /*
     * Метод, который вызывается перед сохранением модели
     */
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            //кодируем html-сущности
            $this->text = Html::encode($this->text);
            return true;
        } else {
            return false;
        }
    }

}