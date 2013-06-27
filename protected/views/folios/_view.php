<?php
/** @var FoliosController $this */
/** @var Folios $data */
?>
<div class="view">
                    
        <?php if (!empty($data->lugar)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->lugar); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->psicologica)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('psicologica')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->psicologica); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tecnica)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tecnica')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tecnica); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->entrevista)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('entrevista')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->entrevista); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->puntaje)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('puntaje')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->puntaje); ?>
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