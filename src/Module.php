<?php

namespace vl_anufriev\va_static_blocks;

use Yii;
use yii\base\InvalidConfigException;

/**
 * Module implements CRUD with static pages.
 *
 * @author Vasilij Belosludcev http://mihaly4.ru
 * @since 1.0.0
 */
class Module extends \yii\base\Module
{

    public $tableName = '{{%block}}';

    public $imperaviLanguage;
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (!$this->imperaviLanguage) {
            if (stripos(Yii::$app->language, 'en') !== 0) {
                $this->imperaviLanguage = substr(Yii::$app->language, 0, 2);
            }
        }
        $this->registerTranslations();
    }
    
    /**
     * Registeration translation files.
     */
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['vl_anufriev/va_static_blocks/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'ru',
            'forceTranslation' => true,
            'basePath' => '@vl_anufriev/va_static_blocks/messages',
            'fileMap' => [
                'vl_anufriev/va_static_blocks/core' => 'core.php',
            ],
        ];
    }

    /**
     * Translates a message to the specified language.
     *
     * @param string $message the message to be translated.
     * @param array $params the parameters that will be used to replace the corresponding placeholders in the message.
     * @param string $language the language code (e.g. `en-US`, `en`). If this is null, the current application language
     * will be used.
     * @return string
     */
    public static function t($message, $params = [], $language = null)
    {
        return Yii::t('vl_anufriev/va_static_blocks/core', $message, $params, $language);
    }
}
