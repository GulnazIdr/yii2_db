<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Course $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="course-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=  $form->field($model, 'id')->textInput() ?>
    <?php if ($model->image): ?>
        <p>
            <img src="<?=$model->image?>" style="max-width:200px;">
        </p>
    <?php endif; ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php if ($model->image): ?>
        <p>
            <img src="<?=$model->image?>" style="max-width:200px;">
        </p>
    <?php endif; ?>

    <?= $form->field($model, 'image')->textInput(['placeholder' => 'https://www.google.com/imgres?q=images&imgurl=https%3A%2F%2Fassets.bucketlistly.blog%2Fsites%2F5adf778b6eabcc00190b75b1%2Fcontent_entry5adf77af6eabcc00190b75b6%2F6075185986d092000b192d0a%2Ffiles%2Fbest-free-travel-images-main-image-hd-op.webp&imgrefurl=https%3A%2F%2Fwww.bucketlistly.blog%2Fposts%2Fbest-free-travel-images&docid=yd5o5HYNI9716M&tbnid=k63TzmoYxjDtSM&vet=12ahUKEwiXoq7hyaaRAxUNGRAIHd1JG_oQM3oECCcQAA..i&w=2000&h=1333&hcb=2&ved=2ahUKEwiXoq7hyaaRAxUNGRAIHd1JG_oQM3oECCcQAA']) ?>


    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
