<?php

namespace modules\fm;

use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
 * @package modules\fm
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // i18n
        $app->i18n->translations['modules/fm/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@modules/fm/messages',
            'fileMap' => [
                'modules/fm/module' => 'module.php',
            ],
        ];

        // Rules
        $app->getUrlManager()->addRules(
            [
                // объявление правил здесь
                'fm' => 'fm/default/index',
                'fm/elfinder/<_a:[\w\-]+>' => 'fm/elfinder/<_a>',
            ]
        );
    }
}