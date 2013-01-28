<?php
/* @var $this OulContratosEstadoController */
/* @var $model OulContratosEstado */

$this->breadcrumbs=array(
	'Oul Contratos Estados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OulContratosEstado', 'url'=>array('index')),
	array('label'=>'Manage OulContratosEstado', 'url'=>array('admin')),
);
?>

<h1>Create OulContratosEstado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>