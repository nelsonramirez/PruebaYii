<?php
/* @var $this EstudiosController */
/* @var $data Estudios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Institucion')); ?>:</b>
	<?php echo CHtml::encode($data->Institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anoGrado')); ?>:</b>
	<?php echo CHtml::encode($data->anoGrado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_id); ?>
	<br />


</div>