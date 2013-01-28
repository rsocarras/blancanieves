<?php
/* @var $this TblContratosTipoController */
/* @var $model TblContratosTipo */

$this->breadcrumbs=array(
	'Tbl Contratos Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblContratosTipo', 'url'=>array('index')),
	array('label'=>'Manage TblContratosTipo', 'url'=>array('admin')),
);
?>

<h1>Create TblContratosTipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>