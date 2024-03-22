<?php

namespace pendalf89\filemanager\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('index');
        }
        return $this->redirect('https://2doks.ru');
    }

    public function actionSettings()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('settings');
        }
        return $this->redirect('https://2doks.ru');
    }
}
