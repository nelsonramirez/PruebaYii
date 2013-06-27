<div class="form">
    <?php
    /** @var FoliosController $this */
    /** @var Folios $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'folios-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'lugar', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'psicologica', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'tecnica', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'entrevista', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'puntaje', array('class' => 'span5')) ?>
                        <?php echo $form->dropDownListRow($model, 'usuarios_id', CHtml::listData(Usuarios::model()->findAll(), 'id', Usuarios::representingColumn())) ?>
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