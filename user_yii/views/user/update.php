<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this -> title = "Редактирование пользователя #{$model->id}";
?>

<h1><?= Html::encode($this->title)?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username')->textInput() ?>
<?= $form->field($model, 'email')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>