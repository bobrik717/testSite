<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller{
    public function actionIndex(){
        $users = Users::find()->all();

        $vars = [
            'users' => $users,
        ];
        return $this->render('usersList',$vars);
    }
}