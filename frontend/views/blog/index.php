<?php
/* @var $this yii\web\View */
/* @var $blogs common\models\Blog */

?>
<h1>/blog/index</h1>

<div class="blog">

    <?foreach ($blogs as $blog){
        ?>
        <div class="news_blog">
            <div class="image_blog">
                <img src="<?= \yii\helpers\Url::to('@web/images/no-image.png') ?>" alt="">
            </div>
            <div class="title_blog"><h2><?= $blog['title']?></h2></div>
            <div class="date_blog"><?= $blog['date']?></div>
            <div class="hr_style">
                <hr>
            </div>
            <div class="desc_blog">
                <?= $blog['description']?>
                <a href="<?= \yii\helpers\Url::to([ $blog['id']]) ?>">read more</a>
            </div>
        </div>
        <div class="blogs">
            <hr class="style-seven">
        </div>
        <?php
    }
    ?>


</div>
