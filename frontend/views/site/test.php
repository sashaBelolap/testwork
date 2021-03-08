<h1>This is a test base page</h1>
<?php

$this->title = 'testbase';
$this->params['breadcrumbs'][] = $this->title;

echo '<h2>Books</h2>';
$rows = (new \yii\db\Query())
    ->select('*')
    ->from('books')
    ->all();
var_dump($rows);

echo '<h2>Authors</h2>';
$rows = (new \yii\db\Query())
    ->select('*')
    ->from('authors')
    ->all();
var_dump($rows);
