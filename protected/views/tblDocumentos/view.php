<?php
/* @var $this TblDocumentosController */
/* @var $model TblDocumentos */

$this->breadcrumbs=array(
	'Tbl Documentoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblDocumentos', 'url'=>array('index')),
	array('label'=>'Create TblDocumentos', 'url'=>array('create')),
	array('label'=>'Update TblDocumentos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblDocumentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblDocumentos', 'url'=>array('admin')),
);
?>

<h1>View TblDocumentos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_contrato',
		'descripcion',
		'contenido',
		'tamanio',
		'tipo',
		'nombre_archivo',
		'tamanio_unidad',
	),
)); ?>
