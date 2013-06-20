<h1>Editar tarea</h1>
<?php
$form = $this->beginWidget('CActiveForm');
?>
<div>
    
<?php
echo $form->labelEx($model,'nombre');
echo $form->textField($model,'nombre');
echo $form->error($model,'nombre');
?>    
    
</div>

<div>
    
<?php
echo $form->labelEx($model,'descripcion');
echo $form->textArea($model,'descripcion');
echo $form->error($model,'descripcion');
?>    
    
</div>

<?php
echo CHtml::submitButton('Guardar');
$this->endWidget();
?>