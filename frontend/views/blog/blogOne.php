<?php
/**
 * Created by PhpStorm.
 * User: Gasparyan
 * Date: 28.01.2019
 * Time: 1:50
 */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\CommentForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="one">
    <div class="title_bl"><h2><?= $blog['title'] ?></h2></div>
    <div class="big_blog_image">
        <img src="<?= $blog['image'] ?>" alt="">
    </div>
    <div class="blog_clock"><?= $blog['date'] ?></div>
    <div class="des"><?= $blog['description']?></div>
</div>




<?php foreach ($comments as $comment){
    ?>
    <div class="comment">
        <div class="cmm"></div>
        <div class="all_comments">
            <div class="comment_image">
                <img src="" alt="">
            </div>
            <?php foreach ($users as $user){
?>
                <div class="comment_user"><?= $user['username']?></div>
        <?php
            }?>

            <div class="comment_text"><?= $comment['text']?></div>
            <div class="comment_date"><?= $comment['date']?></div>
        </div>
    </div>
    <?php
}?>



<!--<div class="row">-->
<!--    <div class="col-lg-5">-->
<!--        --><?php //$form = ActiveForm::begin(['id' => 'login-form']); ?>
<!---->
<!--        --><?//= $form->field($model, 'comment')->textarea(['rows' => '6']) ?>
<!---->
<!---->
<!---->
<!--        <div class="form-group">-->
<!--            --><?//= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--        </div>-->
<!---->
<!--        --><?php //ActiveForm::end(); ?>
<!--    </div>-->
<!--</div>-->


<?//= Html::textInput('downloadSourceCode',"",['id'=>'downloadSourceCode']); ?>