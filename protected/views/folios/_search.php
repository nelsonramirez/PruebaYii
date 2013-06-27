<?php
/** @var FoliosController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'lugar', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'psicologica', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'tecnica', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'entrevista', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'puntaje', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'usuarios_id', CHtml::listData(Usuarios::model()->findAll(), 'id', Usuarios::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
