<?php
/** @var UsuariosController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 60)); ?>

<?php echo $form->textFieldRow($model, 'telefono', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 45)); ?>

<?php echo $form->checkBoxRow($model, 'estado'); ?>

<?php echo $form->textFieldRow($model, 'genero', array('class' => 'span5', 'maxlength' => 1)); ?>

<?php echo $form->dropDownListRow($model, 'ciudad_id', CHtml::listData(Ciudades::model()->findAll(), 'id', Ciudades::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
