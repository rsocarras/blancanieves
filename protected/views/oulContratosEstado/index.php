<?php
/* @var $this OulContratosEstadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oul Contratos Estados',
);

$this->menu=array(
	array('label'=>'Create OulContratosEstado', 'url'=>array('create')),
	array('label'=>'Manage OulContratosEstado', 'url'=>array('admin')),
);
?>

<h1>Oul Contratos Estados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
