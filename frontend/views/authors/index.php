<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AuthorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Авторы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать автора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'about:ntext',
            [
                'attribute' => 'created_at',
//                'format' => 'datetime',
                'filter' =>  DateTimePicker::widget([
                    'name' => 'dp_1',
                    'type' => DateTimePicker::TYPE_INPUT,
//                    'value' => '23-Feb-1982 10:10',
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'dd-M-yyyy HH:ii'
                    ]
                ])
            ],
            [
                'attribute' => 'updated_at',
//                'format' => 'datetime',
                'filter' =>  DateTimePicker::widget([
                    'name' => 'dp_1',
                    'type' => DateTimePicker::TYPE_INPUT,
//                    'value' => '23-Feb-1982 10:10',
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'dd-M-yyyy HH:ii'
                    ]
                ])
            ],
            [
                'label' => 'Количество книг',
                'value' => 'bookscount',
                //'attribute' => 'bookscount'
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
