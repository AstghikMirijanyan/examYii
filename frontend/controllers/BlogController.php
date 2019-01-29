<?php

namespace frontend\controllers;

use common\models\Blog;
use common\models\Comment;
use yii\web\NotFoundHttpException;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blogs = Blog::find()->where(['status' => '1'])->asArray()->all();

        return $this->render('index', [
            'blogs' => $blogs
        ]);
    }

    public function actionBlog($id)
    {

        $comments = Comment::find()->andwhere(['blog_id'=>'2'])->asArray()->all();
        if ($data = Blog::find()->andWhere(['id' => $id])->asArray()->one()) {
            return $this->render('blogOne', [
                'blog' => $data,
                'comments' => $comments
            ]);
        } else {
            throw new NotFoundHttpException('NO BLOG');
        }


    }

}
