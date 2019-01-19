<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Book1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '图书管理系统';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('增加新图书', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'book_ISBN',
            'book_name',
            'book_author',
            'book_type',
            //'book_content',
            'book_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
