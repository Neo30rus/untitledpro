<?php

namespace app\controllers;

use app\core\initController;

class UserController extends initController
{
    public function actionProfile()
    {
        echo 'Cтраница профиля';
        var_dump($this->route);
    }

}