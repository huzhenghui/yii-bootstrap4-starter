<?php
$config = require __DIR__ . '/../vendor/huzhenghui/yii2-app-basic-files/config/web.php';
$config['basePath'] = dirname(__DIR__);
$config['components']['request']['cookieValidationKey'] = (require __DIR__ . '/../config/cookieValidationKey.local.php')['cookieValidationKey'];
$config['modules']['starter']['class'] = 'huzhenghui\yii\bootstrap4\starter\Module';
$config['defaultRoute'] = 'starter/default/index';
return $config;
