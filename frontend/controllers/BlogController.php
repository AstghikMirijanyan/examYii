<?php

namespace frontend\controllers;
use common\models\Blog;
use yii\web\NotFoundHttpException;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blogs = Blog::find()->where(['status'=>'1'])->asArray()->all();

        return $this->render('index',[
                'blogs' => $blogs
        ]);
    }

    public function actionBlog($slug)
    {

if ($data = Blog::find()->andWhere(['slug'=>$slug])->asArray()->one()){
    return $this->render('blogOne',[
        'blog' => $data
    ]);
}else{
    throw new NotFoundHttpException('NO BLOG');
}





    }

}
