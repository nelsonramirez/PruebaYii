<?php
/** @var UsuariosController $this */
/** @var Usuarios $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->telefono)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->telefono); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::mailto($data->email); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->estado == 1 ? 'True' : 'False'); ?>
                            </div>
        </div>

                
        <?php if (!empty($data->genero)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->genero); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->ciudad->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->ciudad->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>