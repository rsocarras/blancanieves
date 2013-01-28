<?php
/* @var $this TblDocumentosController */
/* @var $model TblDocumentos */

$this->breadcrumbs=array(
	'Tbl Documentoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblDocumentos', 'url'=>array('index')),
	array('label'=>'Create TblDocumentos', 'url'=>array('create')),
	array('label'=>'View TblDocumentos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblDocumentos', 'url'=>array('admin')),
);
?>

<h1>Update TblDocumentos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>