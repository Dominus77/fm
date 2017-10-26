<?php

namespace modules\fm;

use Yii;

/**
 * Class Module
 * @package modules\fm
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'modules\fm\controllers\frontend';

    /**
     * @var boolean Если модуль используется для админ-панели.
     */
    public $isBackend;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if ($this->isBackend === true) {
            $this->controllerNamespace = 'modules\fm\controllers\backend';
            $this->setViewPath('@modules/fm/views/backend');
            $this->controllerMap = [
                'elfinder' => [
                    'class' => 'mihaildev\elfinder\Controller',
                    'access' => ['viewAdminPage'],
                    'disabledCommands' => ['netmount'],
                    'roots' => [
                        [
                            'baseUrl' => '', //Yii::$app->params['domainFrontend'],
                            'basePath' => '@upload',
                            'path' => 'uploads',
                            'name' => self::t('module', 'uploads'),
                            'access' => ['read' => '*', 'write' => 'fileManager']
                        ],
                        [
                            'class' => 'mihaildev\elfinder\volume\UserPath',
                            'baseUrl' => '', //Yii::$app->params['domainFrontend'],
                            'basePath' => '@upload',
                            'path' => '/uploads/user_{id}',
                            'name' => self::t('module', 'My Folder'),
                        ],
                    ],
                ]
            ];
        } else {
            $this->setViewPath('@modules/fm/views/frontend');
            $this->controllerMap = [
                'elfinder' => [
                    'class' => 'mihaildev\elfinder\Controller',
                    'access' => YII_ENV_DEV ? ['@', '?'] : ['@'],
                    'disabledCommands' => ['netmount'],
                    'roots' => [
                        [
                            'baseUrl' => '', //Yii::$app->params['domainFrontend'],
                            'basePath' => '@upload',
                            'path' => 'uploads',
                            'name' => self::t('module', 'uploads'),
                            'access' => ['read' => '*', 'write' => 'fileManager']
                        ],
                    ],
                ]
            ];
        }
    }

    /**
     * @param $category
     * @param $message
     * @param array $params
     * @param null $language
     * @return string
     */
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/fm/' . $category, $message, $params, $language);
    }
}
