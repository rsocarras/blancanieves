<?php
/* @var $this TblContratosTipoController */
/* @var $model TblContratosTipo */

$this->breadcrumbs=array(
	'Tbl Contratos Tipos'=>array('index'),
	$model->tipoID=>array('view','id'=>$model->tipoID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblContratosTipo', 'url'=>array('index')),
	array('label'=>'Create TblContratosTipo', 'url'=>array('create')),
	array('label'=>'View TblContratosTipo', 'url'=>array('view', 'id'=>$model->tipoID)),
	array('label'=>'Manage TblContratosTipo', 'url'=>array('admin')),
);
?>

<h1>Update TblContratosTipo <?php echo $model->tipoID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>