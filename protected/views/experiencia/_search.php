<?php
/* @var $this ExperienciaController */
/* @var $model Experiencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empresa'); ?>
		<?php echo $form->textField($model,'Empresa',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Inicio'); ?>
		<?php echo $form->textField($model,'Inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Finalizacion'); ?>
		<?php echo $form->textField($model,'Finalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jefe'); ?>
		<?php echo $form->textField($model,'Jefe',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarios_id'); ?>
		<?php echo $form->textField($model,'usuarios_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->