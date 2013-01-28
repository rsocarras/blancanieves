<?php
/* @var $this TblContratoController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Contratos';
$this->breadcrumbs=array(
	'Lista de Contratos',
);

$this->menu=array(
	array('label'=>'Crear Contrato', 'url'=>array('create')),
	array('label'=>'Admin Contrato', 'url'=>array('admin')),
);
?>

<h1>Lista de Contratos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
