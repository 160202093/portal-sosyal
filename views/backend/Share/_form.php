<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\sosyal\models\Share */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="share-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?= $form->field($model, 'UserID')->textInput() ?> -->

   <!--  <?= $form->field($model, 'Date')->textarea(['rows' => 6]) ?> -->


    <?= $form->field($model, 'Text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
