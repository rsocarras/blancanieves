<?php
/* @var $this OulContratosEstadoController */
/* @var $model OulContratosEstado */

$this->breadcrumbs=array(
	'Oul Contratos Estados'=>array('index'),
	$model->estadoID,
);

$this->menu=array(
	array('label'=>'List OulContratosEstado', 'url'=>array('index')),
	array('label'=>'Create OulContratosEstado', 'url'=>array('create')),
	array('label'=>'Update OulContratosEstado', 'url'=>array('update', 'id'=>$model->estadoID)),
	array('label'=>'Delete OulContratosEstado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->estadoID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OulContratosEstado', 'url'=>array('admin')),
);
?>

<h1>View OulContratosEstado #<?php echo $model->estadoID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'estadoID',
		'estado',
	),
)); ?>
