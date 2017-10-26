<?php

namespace modules\fm\controllers\backend;

use yii\web\Controller;
use yii\filters\AccessControl;
use modules\fm\Module;

/**
 * Class DefaultController
 * @package modules\fm\controllers\backend
 */
class DefaultController extends Controller
{
    /*public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['fileManager'],
                    ]
                ],
            ],
        ];
    }*/

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
