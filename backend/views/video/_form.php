<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Video $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'video_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_video_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'txt_tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ysn_thumbnil')->textInput() ?>

    <?= $form->field($model, 'int_status_type')->textInput() ?>

    <?= $form->field($model, 'dat_created_at')->textInput() ?>

    <?= $form->field($model, 'dat_updated_at')->textInput() ?>

    <?= $form->field($model, 'int_created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
