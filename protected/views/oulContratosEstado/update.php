<?php
/* @var $this OulContratosEstadoController */
/* @var $model OulContratosEstado */

$this->breadcrumbs=array(
	'Oul Contratos Estados'=>array('index'),
	$model->estadoID=>array('view','id'=>$model->estadoID),
	'Update',
);

$this->menu=array(
	array('label'=>'List OulContratosEstado', 'url'=>array('index')),
	array('label'=>'Create OulContratosEstado', 'url'=>array('create')),
	array('label'=>'View OulContratosEstado', 'url'=>array('view', 'id'=>$model->estadoID)),
	array('label'=>'Manage OulContratosEstado', 'url'=>array('admin')),
);
?>

<h1>Update OulContratosEstado <?php echo $model->estadoID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>