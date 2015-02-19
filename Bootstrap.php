<?php

namespace fonclub\router;

use fonclub\router\models\Router;
use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
 * @package fonclub\router
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $model = new Router();
        $rules = $model->find()->all();

        $dbRules = [];
        foreach ($rules as $rule) {
            $dbRules[] = [
                'pattern' => $rule->pattern,
                'route' => $rule->route,
                'suffix' => $rule->suffix ? $rule->suffix : false,
                'defaults' => $rule->defaults ? json_decode($rule->defaults, true) : array()
            ];
        }

        if (!empty($dbRules))
            $app->urlManager->addRules($dbRules, false);
    }
}
