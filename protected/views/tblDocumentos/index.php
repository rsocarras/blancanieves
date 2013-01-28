<?php
/* @var $this TblDocumentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Documentoses',
);

$this->menu=array(
	array('label'=>'Create TblDocumentos', 'url'=>array('create')),
	array('label'=>'Manage TblDocumentos', 'url'=>array('admin')),
);
?>

<h1>Tbl Documentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
