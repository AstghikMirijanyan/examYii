<?php
/**
 * Created by PhpStorm.
 * User: Gasparyan
 * Date: 28.01.2019
 * Time: 1:50
 */
/* @var $this yii\web\View */
/* @var $blogs common\models\Blog */
?>

<div class="one">
    <div class="title_bl"><h2><?= $blog['title'] ?></h2></div>
    <div class="big_blog_image">
        <img src="<?= $blog['image'] ?>" alt="">
    </div>
    <div class="blog_clock"><?= $blog['date'] ?></div>
    <div class="des"><?= $blog['description']?></div>
</div>