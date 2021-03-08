<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property int $author
 * @property string|null $year
 * @property string|null $genre
 * @property string $created_at
 * @property string|null $updated_at
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author'], 'required'],
            [['author'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['year'], 'string', 'max' => 50],
            [['genre'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'author' => 'Автор',
            'year' => 'Год выхода',
            'genre' => 'Жанр',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата изменения',
        ];
    }
    public function getAuthors()
    {
        return $this->hasOne(Authors::className(), ['id' => 'author']);
    }

    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

}
