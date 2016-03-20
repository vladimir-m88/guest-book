<?php
use yii\web\Request;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;
?>

<div class="col-lg-6">
    <h2>Добавьте сообщение</h2>
    <?php $form = ActiveForm::begin(['id' => 'guest-book-form']) ?>
    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->field($model, 'user_name')->textInput(); ?>
    <?php echo $form->field($model, 'email')->textInput(); ?>
    <?php echo $form->field($model, 'homepage')->textInput(); ?>
    <?php echo $form->field($model, 'text')->textarea(); ?>
    <?php echo $form->field($model, 'captcha')->widget(Captcha::classname(), []) ?>
    <?php echo Html::submitButton('Отправить', ['class' => 'btn btn-primary']); ?>
    <?php ActiveForm::end() ?>
</div>