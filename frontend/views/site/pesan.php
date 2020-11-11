<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php 
$form = ActiveForm::begin();
?>
<?= $form->field($model,'nama') ?>
<?= $form->field($model,'pesan') ?>

<div class="form-group">
	<?= Html::submitButton('Submit',['class' =>'btn btn-success'])?>
</div>

<?php ActiveForm::end();?>