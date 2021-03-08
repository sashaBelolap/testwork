<?php


use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Books', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'attribute' => 'author',
                'value' => 'authors.name'
            ],
            'year',
            'genre',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
