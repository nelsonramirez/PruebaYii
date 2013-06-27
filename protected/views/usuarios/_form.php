<div class="form">
    <?php
    /** @var UsuariosController $this */
    /** @var Usuarios $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'usuarios-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                        <?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 60)) ?>
                        <?php echo $form->textFieldRow($model, 'telefono', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 45)) ?>
                        <?php echo $form->checkBoxRow($model, 'estado') ?>
                        <?php /* echo $form->textFieldRow($model, 'genero', array('class' => 'span5', 'maxlength' => 1)) */?>
                        <?php echo $form->dropDownListRow($model, 'genero', Usuarios::getGeneros()) ?>
                        <?php echo $form->dropDownListRow($model, 'ciudad_id', CHtml::listData(Ciudades::model()->findAll(), 'id', Ciudades::representingColumn())) ?>
                <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>