<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Book1 */

$this->title = '新增图书';
$this->params['breadcrumbs'][] = ['label' => '图书管理系统', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
