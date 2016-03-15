<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title='Test Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('Имя') ?>

<?= $form->field($model, 'email')->label('Ваш E-Mail') ?>

	<div class="form-group">
		<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
	</div>

<?php ActiveForm::end(); ?>