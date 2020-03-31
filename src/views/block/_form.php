<?php

use vl_anufriev\va_static_blocks\Module;
use vova07\imperavi\Widget as Imperavi;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Block */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="block-form">
    <?php $settings = [
        'minHeight' => 200,
        'plugins' => [
            'fullscreen',
        ],
    ]; ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'body')->widget(Imperavi::class, [
        'settings' => $settings,
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('SAVE'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
