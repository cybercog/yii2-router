fonclub/yii2-router
===================

Модуль для хранения urlRules в БД

Установка
------------

Запустить 
```
php composer.phar require --prefer-dist "fonclub/yii2-router" "dev-master"
```

или добавить в  `composer.json:`

```
"fonclub/yii2-router": "dev-master"
```

#### 2. Мигрировать таблицу в БД

`php yii migrate/up --migrationPath=@vendor/fonclub/yii2-router/migrations`

##### 3. Используем модуль

```

<?php
    ......
    'modules' => [
        'router' => [
            'class' => 'fonclub\router\Module',
        ],
    ],
    ......
```