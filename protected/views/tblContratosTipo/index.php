<?php
/* @var $this TblContratosTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Contratos Tipos',
);

$this->menu=array(
	array('label'=>'Create TblContratosTipo', 'url'=>array('create')),
	array('label'=>'Manage TblContratosTipo', 'url'=>array('admin')),
);
?>

<h1>Tbl Contratos Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
