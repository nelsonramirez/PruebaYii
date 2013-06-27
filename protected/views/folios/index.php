<?php
/** @var FoliosController $this */
/** @var Folios $model */
$this->breadcrumbs = array(
	'Folioses',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Folios::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo Folios::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>