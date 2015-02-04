<?php

namespace app\forms;

use \yii\base\Model;

class LoginForm extends Model
{
    public $email;
    public $password;
    
    public function rules()
    {
        return [
            [['password', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
