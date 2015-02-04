<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; 

$form = ActiveForm::begin();

echo $form->field($loginForm, 'email');
echo $form->field($loginForm, 'password')->passwordInput();

echo Html::submitButton('Login');

ActiveForm::end() 
        
?>