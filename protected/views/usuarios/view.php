<?php
/** @var UsuariosController $this */
/** @var Usuarios $model */
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Usuarios::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Usuarios::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Usuarios::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'nombre',
        'telefono',
        array(
                'name'=>'email',
                'type'=>'email'
            ),
        array(
                'name'=>'estado',
                'type'=>'boolean'
            ),
        'genero',
        array(
			'name'=>'ciudad_id',
			'value'=>($model->ciudad !== null) ? CHtml::link($model->ciudad, array('/ciudades/view', 'id' => $model->ciudad->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>