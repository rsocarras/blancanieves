<?php
/* @var $this TblDocumentosController */
/* @var $model TblDocumentos */

$this->breadcrumbs=array(
	'Tbl Documentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblDocumentos', 'url'=>array('index')),
	array('label'=>'Manage TblDocumentos', 'url'=>array('admin')),
);
?>

<h1>Create TblDocumentos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>