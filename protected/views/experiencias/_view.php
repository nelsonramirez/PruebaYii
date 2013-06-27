<?php
/** @var ExperienciasController $this */
/** @var Experiencias $data */
?>
<div class="view">
                    
        <?php if (!empty($data->Empresa)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Empresa')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Empresa); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Inicio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Inicio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->Inicio, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->Inicio)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Finalizacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Finalizacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->Finalizacion, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->Finalizacion)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Jefe)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Jefe')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Jefe); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->usuarios->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->usuarios->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>