<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Book1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book1-form" style="width:450px;">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'book_ISBN')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'book_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_type')->radioList(['JavaScript'=>'JavaScript','文学'=>'文学','其他'=>'其他']) ?>

    <?= $form->field($model, 'book_content')->textarea(['rows'=>3]) ?>

    <?= $form->field($model, 'book_time')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
