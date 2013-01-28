<?php
/* @var $this TblTerceroController */
/* @var $model TblTercero */

$this->breadcrumbs=array(
	'Tbl Terceros'=>array('index'),
	$model->terceroID,
);

$this->menu=array(
	array('label'=>'List TblTercero', 'url'=>array('index')),
	array('label'=>'Create TblTercero', 'url'=>array('create')),
	array('label'=>'Update TblTercero', 'url'=>array('update', 'id'=>$model->terceroID)),
	array('label'=>'Delete TblTercero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->terceroID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblTercero', 'url'=>array('admin')),
);
?>

<h1>View TblTercero #<?php echo $model->terceroID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'terceroID',
		'nombre',
		'estado',
		'direccion',
		'codep',
		'ciudad',
		'departament',
		'pais',
		'telefono',
		'fax',
		'url',
		'email',
		'user_c',
		'user_m',
		'date_c',
		'date_m',
	),
)); ?>
