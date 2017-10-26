<?php

/* @var $this yii\web\View */

use mihaildev\elfinder\ElFinder;
use yii\web\JsExpression;
use yii\helpers\Html;
use yii\helpers\Url;
use modules\fm\Module;

$this->title = Module::t('module', 'File Manager');
$this->registerMetaTag([
    'name' => 'description',
    'content' => Module::t('module', 'File Manager'),
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => Module::t('module', 'File Manager'),
]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fm-frontend-default-index">
    <div class="row">
        <article class="col-sm-12 maincontent">
            <header class="page-header">
                <h1 class="page-title"><?= Html::encode($this->title) ?></h1>
            </header>
            <?php
            echo ElFinder::widget([
                'language' => 'ru',
                'controller' => Url::to('/fm/elfinder'), // вставляем название контроллера, по умолчанию равен elfinder
                'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                'callbackFunction' => new JsExpression('function(file, id){}'), // id - id виджета
                'containerOptions' => [
                    'style' => 'height:375px'
                ],
                'frameOptions' => [
                    'style' => 'height:100%;width:100%;border:0'
                ],
            ]); ?>
        </article>
    </div>
</div>
