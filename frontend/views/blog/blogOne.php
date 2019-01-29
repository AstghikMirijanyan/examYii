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

<?= var_dump($comments)?>
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