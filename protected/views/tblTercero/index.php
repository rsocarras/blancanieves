<?php
/* @var $this TblTerceroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Terceros',
);

$this->menu=array(
	array('label'=>'Crear Tercero', 'url'=>array('create')),
	array('label'=>'Admin Tercero', 'url'=>array('admin')),
);
?>

<h1>Tbl Terceros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
