<?php

namespace app\controllers;

use app\forms\LoginForm;

use Yii;
use yii\web\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $loginForm = new LoginForm;
        
        $data = Yii::$app->request->post();
        
        if(!empty($data)) {
            $loginForm->load($data);
            $loginForm->validate();
        }
            
        return $this->render('index', ['loginForm' => $loginForm]);
    }
}