<?php 
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title='Регистрация';
?>

<h1><?= Html::encode($this->title) ?></h1>
<div class="signup-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username') ->textInput() ?>
    <?= $form->field($model, 'email') ->textInput() ?>
    <?= $form->field($model, 'password') ->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end() ?>
</div>