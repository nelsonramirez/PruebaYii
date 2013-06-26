<?php
/* @var $this ExperienciaController */
/* @var $data Experiencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresa')); ?>:</b>
	<?php echo CHtml::encode($data->Empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Inicio')); ?>:</b>
	<?php echo CHtml::encode($data->Inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Finalizacion')); ?>:</b>
	<?php echo CHtml::encode($data->Finalizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jefe')); ?>:</b>
	<?php echo CHtml::encode($data->Jefe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_id); ?>
	<br />


</div>