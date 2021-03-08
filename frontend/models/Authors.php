<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "authors".
 *
 * @property int $id
 * @property string $name
 * @property string|null $about
 * @property string $created_at
 * @property string|null $updated_at
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['about'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Автор',
            'about' => 'Об авторе',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата изменения',
        ];
    }
    public function getBooks()
    {
        return $this->hasMany(Books::class, ['author' => 'id']);
    }

    public function getBooksCount()
    {
        return $this->hasMany(Books::class, ['author' => 'id'])->count();
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
