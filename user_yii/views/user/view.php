<?php
use yii\helpers\Html;

$this -> title = "Пользователь #{$model->id}";
?>

<h1><?= Html::encode($this->title)?></h1>

<p><b>Username:</b><?= Html::encode($model->username) ?></p>
<p><b>Email:</b><?= Html::encode($model->email) ?></p>

<?= Html::a('Назад', ['index'], ['class' => 'btn btn-primary']) ?>