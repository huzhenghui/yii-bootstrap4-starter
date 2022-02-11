<?php

namespace huzhenghui\yii\bootstrap4\starter\controllers;

use huzhenghui\yii\bootstrap4\starter\Module;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function init()
    {
        parent::init();
        $module = $this->module;
        if ($module instanceof Module) {
            $this->layout = $module->getLayout();
        }
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionHome()
    {
        return $this->render('home');
    }
}
