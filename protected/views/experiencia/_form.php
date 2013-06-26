<?php
/* @var $this ExperienciaController */
/* @var $model Experiencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'experiencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa'); ?>
		<?php echo $form->textField($model,'Empresa',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'Empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Inicio'); ?>
		<?php echo $form->textField($model,'Inicio'); ?>
		<?php echo $form->error($model,'Inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Finalizacion'); ?>
		<?php echo $form->textField($model,'Finalizacion'); ?>
		<?php echo $form->error($model,'Finalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jefe'); ?>
		<?php echo $form->textField($model,'Jefe',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Jefe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarios_id'); ?>
		<?php echo $form->textField($model,'usuarios_id'); ?>
		<?php echo $form->error($model,'usuarios_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->