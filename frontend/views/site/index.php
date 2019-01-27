<?php

/* @var $this yii\web\View */

$this->title = 'Blog';
?>

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
        </div>
    </div>
    <div class="blogs">
        <hr class="style-seven">
    </div>
    <?php
    }
   ?>


</div>