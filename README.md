Module Elfinder
===============================
File Manager for [yii2-advanced-start](https://github.com/Dominus77/yii2-advanced-start)
---

1. Copy to your project in the modules folder fm
2. Connect the module in the standard way

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

Link:

```
Url::to(['fm/default/index']); // for Web Page
Url::to('/fm/elfinder'); // for TinyMCE
```

Configured in:
```
modules\fm\Module.php
```


