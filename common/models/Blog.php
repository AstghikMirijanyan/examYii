<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $date
 * @property string $slug
 * @property string $description
 * @property string $status
 *
 * @property Comment[] $comments
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'description'], 'required'],
            [['date'], 'safe'],
            [['description', 'status'], 'string'],
            [['image', 'title', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'date' => 'Date',
            'slug' => 'Slug',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['blog_id' => 'id']);
    }
}
