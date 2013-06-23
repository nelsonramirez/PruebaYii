<?php
/* @var $this FolioController */
/* @var $model Folio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'folio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'psicologica'); ?>
		<?php echo $form->textField($model,'psicologica'); ?>
		<?php echo $form->error($model,'psicologica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tecnica'); ?>
		<?php echo $form->textField($model,'tecnica'); ?>
		<?php echo $form->error($model,'tecnica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entrevista'); ?>
		<?php echo $form->textField($model,'entrevista'); ?>
		<?php echo $form->error($model,'entrevista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puntaje'); ?>
		<?php echo $form->textField($model,'puntaje'); ?>
		<?php echo $form->error($model,'puntaje'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->