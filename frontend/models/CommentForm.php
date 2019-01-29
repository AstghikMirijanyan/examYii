<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * Commentform is the model behind the contact form.
 */
class CommentForm extends Model
{
    public $comment;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['comment'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($comment)
    {
        return Yii::$app->mailer->compose()
            ->setTo($comment)
            ->send();
    }


}
