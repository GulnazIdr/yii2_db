<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this -> title = 'Пользователи';
?>

<h1><?= Html::encode($this->title)?></h1>

<table class="table table-bordered table-dark">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th> 
    </tr>

    <?php foreach($users as $user): ?>
        <tr>
            <td><?=Html::encode($user->username)?></td>
            <td><?=Html::encode($user->email)?></td>
            <td>
                <?= Html::a('Просмотр', ['view', 'id' => $user->id], ['class' => 'btn btn-secondary']) ?>
                <?= Html::a('Редактировать', ['update', 'id' => $user->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $user->id], 
                ['class' => 'btn btn-danger', 'data' => ['confirm' => 'Точно удалить?']]) ?>
            </td>
    
        </tr>
    <?php endforeach; ?>
</table>