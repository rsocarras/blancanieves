<?php
/* @var $this TblTerceroController */
/* @var $model TblTercero */

$this->breadcrumbs=array(
	'Tbl Terceros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tercero', 'url'=>array('index')),
	array('label'=>'Admin TblTercero', 'url'=>array('admin')),
);
?>

<h1>Create TblTercero</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>