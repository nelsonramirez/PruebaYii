<?php
/** @var EstudiosController $this */
/** @var Estudios $data */
?>
<div class="view">
                    
        <?php if (!empty($data->Institucion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Institucion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Institucion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->anoGrado)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('anoGrado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->anoGrado); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Titulo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Titulo); ?>
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