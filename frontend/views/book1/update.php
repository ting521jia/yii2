<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Book1 */

$this->title = '更新图书: ' . $model->book_name;
$this->params['breadcrumbs'][] = ['label' => '图书管理系统', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->book_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新图书';
?>
<div class="book1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
