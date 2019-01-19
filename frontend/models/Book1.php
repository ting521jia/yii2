<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Book1 extends ActiveRecord
{
    public static function tableName(){

        return '{{%book}}';

    }
    public function attributeLabels(){
        return [
            'book_ISBN' => 'ISBN号',
            'book_name' => '书名',
            'book_author' => '作者',
            'book_type' => '分类',
            'book_content' => '简介',
            'book_time' => '出版时间',]; }

}
