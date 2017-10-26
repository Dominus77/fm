<?php

namespace modules\fm\controllers\frontend;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use modules\fm\Module;

/**
 * Class DefaultController
 * @package modules\fm\controllers\frontend
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
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        throw new NotFoundHttpException(Module::t('module', 'Page not found.'));
        //return $this->render('index');
    }

}
