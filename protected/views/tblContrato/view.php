<?php
/* @var $this TblContratoController */
/* @var $model TblContrato */

$this->breadcrumbs=array(
	'Tbl Contratos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contrato', 'url'=>array('index'),'itemOptions'=>array('class'=>'list-item')),
	array('label'=>'Create Contrato', 'url'=>array('create'),'itemOptions'=>array('class'=>'create-item')),
	array('label'=>'Update Contrato', 'url'=>array('update', 'id'=>$model->id),'itemOptions'=>array('class'=>'update-item')),
	array('label'=>'Delete Contrato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'itemOptions'=>array('class'=>'delete-item')),
	array('label'=>'Manage Contrato', 'url'=>array('admin'),'itemOptions'=>array('class'=>'admin-item')),
);
?>

<h1>Contrato #<?php echo $model->contratoN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'contratoN',
		'estadoID',
		'tipoID',
		'usuarioID',
		'terceroID',
		'empresaID',
		'contratanteID',
		'shipping_address',
		'objeto',
		'start_date',
		'end_date',
		'mod_date',
		'valor',
		'userID',
		'fecha_c',
		'fecha_m',
		'user_c',
		'user_m',
	),
)); ?>
