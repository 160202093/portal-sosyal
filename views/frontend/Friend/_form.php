<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\sosyal\models\Friendship */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="friendship-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?= $form->field($model, 'UserID')->textInput() ?> -->

    <?= $form->field($model, 'FriendID')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'Relation_start_date')->textarea(['rows' => 6]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
