<?php
use yii\helpers\Html;
$this->title = 'Привет';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::encode($message) ?>