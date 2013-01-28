<?php
/* @var $this TblContratosTipoController */
/* @var $model TblContratosTipo */

$this->breadcrumbs=array(
	'Tbl Contratos Tipos'=>array('index'),
	$model->tipoID,
);

$this->menu=array(
	array('label'=>'List TblContratosTipo', 'url'=>array('index')),
	array('label'=>'Create TblContratosTipo', 'url'=>array('create')),
	array('label'=>'Update TblContratosTipo', 'url'=>array('update', 'id'=>$model->tipoID)),
	array('label'=>'Delete TblContratosTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipoID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblContratosTipo', 'url'=>array('admin')),
);
?>

<h1>View TblContratosTipo #<?php echo $model->tipoID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipoID',
		'tipo',
	),
)); ?>
