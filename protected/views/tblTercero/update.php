<?php
/* @var $this TblTerceroController */
/* @var $model TblTercero */

$this->breadcrumbs=array(
	'Tbl Terceros'=>array('index'),
	$model->terceroID=>array('view','id'=>$model->terceroID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblTercero', 'url'=>array('index')),
	array('label'=>'Create TblTercero', 'url'=>array('create')),
	array('label'=>'View TblTercero', 'url'=>array('view', 'id'=>$model->terceroID)),
	array('label'=>'Manage TblTercero', 'url'=>array('admin')),
);
?>

<h1>Update TblTercero <?php echo $model->terceroID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>