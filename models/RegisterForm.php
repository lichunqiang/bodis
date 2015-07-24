<?php namespace app\models;

use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
    public $account;

    public $password;

    public $email;

    public function rules()
    {
        return [
            [['account', 'password', 'email'], 'required'],

            ['email', 'email'],

            ['account', 'string', 'min' => 3, 'max' => 50],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function register()
    {
        if (!$this->validate()) {
            return false;
        }

        $user = new User();
        $user->setAttributes($this->getAttributes());
        $user->setPassword($this->password);

        if ($user->save()) {
            Yii::$app->user->login($user);
            return true;
        }
        $this->addErrors($user->getErrors());
        return false;
    }
}
