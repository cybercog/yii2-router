<?php

namespace fonclub\router\models;

use Yii;

/**
 * This is the model class for table "{{%router}}".
 *
 * @property integer $id
 * @property string $pattern
 * @property string $route
 * @property string $suffix
 * @property string $defaults
 */
class Router extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%router}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pattern', 'route'], 'required'],
            [['pattern', 'route', 'defaults'], 'string', 'max' => 255],
            [['suffix'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('router', 'ID'),
            'pattern' => Yii::t('router', 'Pattern'),
            'route' => Yii::t('router', 'Route'),
            'suffix' => Yii::t('router', 'Suffix'),
            'defaults' => Yii::t('router', 'Defaults'),
        ];
    }
}
