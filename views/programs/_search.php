<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_predmet') ?>

    <?= $form->field($model, 'order') ?>

    <?= $form->field($model, 'theme') ?>

    <?= $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'program') ?>

    <?php // echo $form->field($model, 'hours') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
