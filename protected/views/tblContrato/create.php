<?php
/* @var $this TblContratoController */
/* @var $model TblContrato */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Crear Contratos',
);
$this->menu=array(
	array('label'=>'Lista Contratos', 'url'=>array('index')),
	array('label'=>'Admin Contrato', 'url'=>array('admin')),
);
?>

<h1>Crear Contrato</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
