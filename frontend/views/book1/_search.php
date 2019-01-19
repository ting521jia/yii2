<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Book1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'book_ISBN') ?>

    <?= $form->field($model, 'book_name') ?>

    <?= $form->field($model, 'book_author') ?>

    <?= $form->field($model, 'book_type') ?>

    <?php // echo $form->field($model, 'book_content') ?>

    <?php // echo $form->field($model, 'book_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
