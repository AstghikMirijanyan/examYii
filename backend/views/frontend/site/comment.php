<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CommentForm */
/* @var $form ActiveForm */
?>
<div class="frontend-site-comment">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'comment') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- frontend-site-comment -->
