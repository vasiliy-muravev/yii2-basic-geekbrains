<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php

	$form = ActiveForm::begin([
		//'id' => 'update-user-form',
	 	'options' => [
	 		'class' => 'form-horizontal'
	 	]
	]);

?>

<?= $form->field($model, 'login')->textInput()->hint('Пожалуйста, введите логин')->label('Логин'); ?>

<?= $form->field($model, 'name')->textInput()->hint('Пожалуйста, введите имя')->label('Имя'); ?>

<?= $form->field($model, 'email')->textInput()->hint('Пожалуйста, введите email')->label('email'); ?>

<div class="form-group">
	<?=	Html::submitButton('Сохранить', ['class' => 'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>