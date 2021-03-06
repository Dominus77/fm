Module FM
===============================
Elfinder File Manager for [yii2-advanced-start](https://github.com/Dominus77/yii2-advanced-start)
---

1. Install [mihaildev/yii2-elfinder](https://github.com/MihailDev/yii2-elfinder) extension.
2. Copy to your project in the modules folder fm
3. Connect the module in the standard way

common/config/main.php
```
'modules' => [
    //...
    'fm' => [
       'class' => 'modules\fm\Module',
    ],
],
```
backend/config/main.php
```
'bootstrap' => [
    //...
    'modules\fm\Bootstrap',
],
'modules' => [
    //...
    'fm' => [
        'isBackend' => true,
    ],
],
```
frontend/config/main.php
```
'bootstrap' => [
    //...
    'modules\fm\Bootstrap',
],
```
console/config/main.php
```
'bootstrap' => [
    //...
    'modules\fm\Bootstrap',
],
```


Link:

```
Url::to(['fm/default/index']); // for Web Page
Url::to('/fm/elfinder'); // for TinyMCE
```

Configured Elfinder for [dominus77/yii2-tinymce-widget](https://github.com/Dominus77/yii2-tinymce-widget) in:
[Module.php](https://github.com/Dominus77/fm/blob/master/Module.php)

Integration with [dominus77/yii2-tinymce-widget](https://github.com/Dominus77/yii2-tinymce-widget)

```
$form->field($model, 'text')->widget(\dominus77\tinymce\TinyMce::className(), [
    'clientOptions' => [
        //...
        /** @see https://www.tinymce.com/docs/configure/file-image-upload/#file_picker_types */
        //'file_picker_types' => 'file image media',
    ],
    'fileManager' => [
        'class' => \dominus77\tinymce\components\MihaildevElFinder::className(),
        'controller' => Url::to('/fm/elfinder'), // << Link to module fm
        'title' => \modules\fm\Module::t('module', 'File Manager'),
        //'width' => 900,
        //'height' => 600,
        'resizable' => 'yes',
    ],
    //...
])
```


